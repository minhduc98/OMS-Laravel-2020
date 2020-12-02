<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Major;
use App\Models\Program;
use App\Models\Department;
use App\Models\Year;
use Illuminate\Support\Facades\DB;

class MajorController extends Controller
{
    public function index(Request $request)
    {
        $title = 'Major';
        $majors = Major::all()->sortBy('year_id');
        $years = [];
        $count = count($majors);
        foreach ($majors as $major) {
            $year = new Year();
            $year = Year::where('id', $major->year_id)->value('year');
            array_push($years, $year);
        }
        return view('major', compact('majors', 'years', 'count', 'title'));
    }

    public function edit($id)
    {
        $departments = Department::pluck('departmentName', 'id');
        $programs = Program::pluck('programName', 'id');
        $years = Year::pluck('year', 'id');

        if ($id != 'new') {
            $title = 'Edit Major';
            $major = Major::findOrFail($id);
            return view('major_edit', compact('id', 'title', 'departments', 'programs', 'years', 'major'));
        } else {
            $title = 'New Major';
            return view('major_edit', compact('id', 'title', 'departments', 'programs', 'years'));
        }
    }

    public function save(Request $request)
    {
        $title = 'Edit Major';
        if ($request->id != 'new') {

            DB::transaction(function () use ($request) {

                $major = Major::find($request->id);

                $major->majorName = $request->major_name;
                $major->majorName_v = $request->major_name_v;
                $major->shortName = $request->major_shortName;
                $major->program_id = $request->program_id;
                $major->department_id = $request->department_id;
                $major->year_id = $request->year_id;
                $major->save();
            });
        } else {
            DB::transaction(function () use ($request) {
                $data = [
                    'MajorName' => $request->major_name,
                    'MajorName_v' => $request->major_name_v,
                    'shortName' => $request->major_shortName,
                    'program_id' => $request->program_id,
                    'department_id' => $request->department_id,
                    'year_id' => $request->year_id,
                ];
                // dd($data);
                $major = Major::create($data);
            });
        }

        return redirect()->action('MajorController@index');
    }

    public function delete(Request $request)
    {
        $major = Major::find($request->id);
        $major->delete();

        return redirect()->action('MajorController@index');
    }
}
