<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;
use App\Models\Profile;
use App\Models\Year;
use App\Models\Major;
use App\Models\Transcript;
use App\Models\TranscriptDetails;
use App\Models\Course;
use App\Models\CourseReport;
use Illuminate\Support\Facades\DB;

class TranscriptController extends Controller
{
    public function index()
    {
        $title = 'Transcript';
        $students = Student::pluck('student_code', 'id');
        $years = Year::pluck('year', 'id');
        $majors = Major::pluck('MajorName', 'id');

        $transcripts = Transcript::all();
        $student_codes = [];
        $years_year = [];
        $count = count($transcripts);
        foreach ($transcripts as $transcript) {
            $student = new Student();
            $year_year = new Year();
            $student_code = Student::where('id', $transcript->student_id)->value('student_code');
            $year_year = Year::where('id', $transcript->year_id)->value('year');
            array_push($student_codes, $student_code);
            array_push($years_year, $year_year);
        }

        return view('transcript', compact('title', 'transcripts', 'students', 'years', 'majors', 'years_year', 'student_codes', 'count'));
    }

    public function edit($id)
    {
        $title = 'Edit Transcript';
        $students = Student::pluck('student_code', 'id');
        $years = Year::pluck('year', 'id');
        $majors = Major::pluck('MajorName', 'id');
        $transcriptDetail_id = TranscriptDetails::where('transcript_id', $id)->value('id');
        $courses = CourseReport::join('course', 'course.id', '=', 'course_report.course_id')
            ->where('course_report.transDetail_id', $transcriptDetail_id)
            ->get();
        $count = count($courses);

        return view('transcript_edit', compact('id', 'title', 'count', 'count', 'courses', 'students', 'years', 'majors'));
    }

    public function save(Request $request)
    {
        if ($request->id != 'new') {

            DB::transaction(function () use ($request) {

                $transcriptDetail_id = TranscriptDetails::where('transcript_id', $request->id)->value('id');

                foreach ($request->final as $key => $value) {
                    $courseReport = CourseReport::where([ ['transDetail_id', $transcriptDetail_id], ['course_id', $request->course_id[$key]] ])->first();
                    $courseReport->final = $request->final[$key];
                    $courseReport->save();
                }
            });
            return redirect()->action('TranscriptController@index');
        }
    }

    public function create_transcript()
    {
        $title = 'Create Transcript';
        $students = Student::pluck('student_code', 'id');
        $years = Year::pluck('year', 'id');
        $majors = Major::pluck('MajorName', 'id');
        return view('transcript_new', compact('title', 'students', 'years', 'majors'));
    }

    public function find_course(Request $request)
    {
        $title = 'Create Transcript with Course';
        $data_general = [
            'student_id' => $request->student_id,
            'year_id' => $request->year_id,
        ];
        $transcript = Transcript::create($data_general);

        $data_transcript_detail = [
            'transcript_id' => $transcript->id,
            'note' => 'validated',
        ];
        $transcript_detail = TranscriptDetails::create($data_transcript_detail);

        if ($request->year_position == '1.') {
            //Find courses compatible
            $courseEng = Course::where([
                    ['course.major_id', $request->major_id],
                    ['course.courseCode', 'like', '%EN2.%']
                ]);
            $courses = Course::where('course.major_id', $request->major_id)
                ->where('course.courseCode', 'like', '%'.$request->year_position.'%')
                ->union($courseEng)
                ->get();
            } else {
                //Find Common Course for B2 and B3 student
                $major_common = Major::where('MajorName', 'like', '%Common Courses%')
                ->where('year_id', $request->year_id);
                $major_id_common = $major_common->value('id');
                //Find courses compatible
                $courseCommon = Course::where('course.major_id', $major_id_common)
                    ->where('course.courseCode', 'not like', '%EN2.%');
                $courses = Course::where('course.major_id', $request->major_id)
                    ->where('course.courseCode', 'like', '%'.$request->year_position.'%')
                    ->union($courseCommon)
                    ->get();
                }
        return view('transcript_new_course', compact('title', 'courses', 'transcript_detail'));
    }

    public function saveNewTranscript(Request $request)
    {
        foreach ($request->final as $key => $value) {
            $dataCourseReport = [
                'final' => $request->final[$key],
                'transDetail_id' => $request->id,
                'course_id' => $request->course_id[$key]
            ];
            $courseReport = CourseReport::create($dataCourseReport);
        }
        return redirect()->action('TranscriptController@index');
    }

    public function delete(Request $request)
    {
        $transcript = Transcript::find($request->id);
        $transcriptDetail = TranscriptDetails::where('transcript_id', $transcript->value('id'));

        $courseReports = CourseReport::where('transDetail_id', $transcriptDetail->value('id'))->delete();

        $transcript->delete();
        $transcriptDetail->delete();

        return redirect()->action('TranscriptController@index');
    }

    public function getGPAGrade($mark)
    {
        if ($mark >= 16) {
            $ECTSgrade = 'A';
        } elseif ($mark >=14) {
            $ECTSgrade = 'B';
        } elseif ($mark >= 13) {
            $ECTSgrade = 'C';
        } elseif ($mark >=11) {
            $ECTSgrade = 'D';
        } elseif ($mark >=10) {
            $ECTSgrade = 'E';
        }
        return $ECTSgrade;
    }

    public function completeCourse($mark)
    {
        if ($mark >=10) {
            $complete = 'Hoàn thành / Yes';
        }
        return $complete;
    }

    public function pdf(Request $request)
    {
        $student_id = $request->student_id;
        $year_id = $request->year_id;
        $major_id = $request->major_id;
        $year_position = $request->year_position;

        $transcript = Transcript::where([ ['student_id', $student_id], ['year_id', $year_id] ]);

        $transcript_id = $transcript->value('id');

        $transcriptDetail = TranscriptDetails::where('transcript_id', $transcript_id);

        $transcriptDetail_id = $transcriptDetail->value('id');

        $currentDate = date("d.m.Y");

        $student = Student::findOrFail($student_id);

        $profile_id = $student->profile_id;

        $profile = Profile::findOrFail($profile_id);

        $major = Major::findOrFail($major_id);

        $year = Year::findOrFail($year_id);

        $average = 0;
        $ECTSgrades = [];
        $completes = [];
        $totalECTS = 0;

        if ($year_position == '1.') {
            //Find courses compatible
            $courseEng = CourseReport::join('course', 'course.id', '=', 'course_report.course_id')
                ->where([
                    ['course_report.transDetail_id', $transcriptDetail_id],
                    ['course.major_id', $major_id],
                    ['course.courseCode', 'like', '%EN2.%']
                ]);
            $courses = CourseReport::join('course', 'course.id', '=', 'course_report.course_id')
                ->where('course_report.transDetail_id', $transcriptDetail_id)
                ->where('course.major_id', $major_id)
                ->where('course.courseCode', 'like', '%'.$year_position.'%')
                ->union($courseEng)
                ->get();
        } else {
            //Find Common Course for B2 and B3 student
            $major_common = Major::where('MajorName', 'like', '%Common Courses%')
                ->where('year_id', $year_id);
            $major_id_common = $major_common->value('id');
            //Find courses compatible
            $courseCommon = CourseReport::where('transDetail_id', $transcriptDetail_id)
                ->join('course', 'course.id', '=', 'course_report.course_id')
                ->where('course.major_id', $major_id_common)
                ->where('course.courseCode', 'not like', '%EN2.%');
            $courses = CourseReport::where('transDetail_id', $transcriptDetail_id)
                ->join('course', 'course.id', '=', 'course_report.course_id')
                ->where('course.major_id', $major_id)
                ->where('course.courseCode', 'like', '%'.$year_position.'%')
                ->union($courseCommon)
                ->get();
        }

        $count = count($courses);

        foreach($courses as $course) {

            $ECTSgrade = self::getGPAGrade($course->final);
            $complete = self::completeCourse($course->final);

            array_push($ECTSgrades, $ECTSgrade);
            array_push($completes, $complete);

            $average = $average + ($course->final * $course->ECTS) / 60;
            $totalECTS = $totalECTS + $course->ECTS;
        }

        $average = round($average, 2);

        $pdf = \PDF::loadView('pdf.transcript', compact('count', 'currentDate', 'student', 'profile', 'major', 'year', 'courses', 'ECTSgrades', 'completes', 'average', 'totalECTS'))->setPaper('A4', 'portrait');

        return $pdf->download('abc.pdf');

    }
}
