<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Major;
use App\Models\Course;
use App\Models\Year;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    public function index(Request $request)
    {
        $title = 'Course';
        // $courses = Course::all()->sortBy('major_id');
        $courses = Course::orderBy('major_id')->paginate(15);
        $majors = [];
        $years = [];
        $count = count($courses);
        foreach ($courses as $course) {
            $major = new Major();
            $major = Major::where('id', $course->major_id);
            array_push($majors, $major->value('MajorName'));
            $year_id = $major->value('year_id');
            $year = Year::where('id', $year_id);
            array_push($years, $year->value('year'));
        }
        return view('course', compact('courses', 'majors', 'years', 'count', 'title'));
    }

    public function edit($id)
    {
        if ($id != 'new') {
            $title = 'Edit Course';
            $course = Course::findOrFail($id);
            return view('course_edit', compact('id', 'title', 'course'));
        } else {
            $title = 'New Course';
            $years = Year::pluck('year', 'id');
            return view('course_edit', compact('id', 'title', 'years'));
        }
    }

    public function findMajor(Request $request)
    {
        $year_id = $request->year_id;
        $majors = Major::where('year_id', $year_id)->get();

        return response()->json([
            'majors' => $majors
        ]);
    }

    public function save(Request $request)
    {
        $title = 'Edit Course';
        if ($request->id != 'new') {

            DB::transaction(function () use ($request) {

                $course = Course::find($request->id);

                $course->courseName = $request->course_name;
                $course->courseName_v = $request->course_name_v;
                $course->courseCode = $request->course_code;
                $course->summary = $request->course_summary;
                $course->totalHour = $request->course_totalHour;
                $course->lectureHour = $request->course_lectureHour;
                $course->labHour = $request->course_labHour;
                $course->save();
            });
        } else {
            DB::transaction(function () use ($request) {
                $data = [
                    'courseName' => $request->course_name,
                    'courseName_v' => $request->course_name_v,
                    'courseCode' => $request->course_code,
                    'summary' => $request->course_summary,
                    'totalHour' => $request->course_totalHour,
                    'lectureHour' => $request->course_lectureHour,
                    'labHour' => $request->course_labHour,
                    'major_id' => $request->major,
                ];
                $course = Course::create($data);
            });
        }

        return redirect()->action('CourseController@index');
    }

    public function delete(Request $request)
    {
        $course = Course::find($request->id);
        $course->delete();

        return redirect()->action('CourseController@index');
    }
}
