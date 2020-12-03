<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Major;
use App\Models\Year;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        $title = 'Student';
        $students = Student::orderBy('student_code')->paginate(15);
        $majors = [];
        $count = count($students);
        foreach ($students as $student) {
            $major = new Major();
            $major = Major::where('id', $student->major_id)->value('MajorName');
            array_push($majors, $major);
        }
        return view('student', compact('students', 'majors', 'count', 'title'));
    }

    public function edit($id)
    {
        $years = Year::pluck('year', 'id');
        $profiles = Profile::pluck('fullName', 'id');
        $users = User::pluck('username', 'id');

        if ($id != 'new') {
            $title = 'Edit Student';
            $student= Student::findOrFail($id);

            $major = Major::findOrFail($student->major_id);

            $year_id = Year::where('id', $major->year_id)->value('id');
            $majors = Major::where('year_id', $year_id)->pluck('MajorName', 'id');

            return view('student_edit', compact('id', 'title', 'years', 'majors', 'major',  'student', 'profiles', 'users'));
        } else {
            $title = 'New Student';
            return view('student_edit', compact('id', 'title', 'years', 'profiles', 'users'));
        }
    }

    public function save(Request $request)
    {
        $title = 'Edit Student';
        if ($request->id != 'new') {

            DB::transaction(function () use ($request) {

                $student = Student::find($request->id);

                $student->student_code = $request->student_code;
                $student->major_id = $request->major;
                $student->profile_id = $request->profile_id;
                $request->user_id = $request->user_id;
                $student->save();
            });
        } else {
            DB::transaction(function () use ($request) {
                $data = [
                    'student_code' => $request->student_code,
                    'major_id' => $request->major,
                    'profile_id' => $request->profile_id,
                    'user_id' => $request->user_id
                ];
                $student = Student::create($data);
            });
        }

        return redirect()->action('StudentController@index');
    }

    public function delete(Request $request)
    {
        $student = Student::find($request->id);
        $student->delete();

        return redirect()->action('StudentController@index');
    }
}
