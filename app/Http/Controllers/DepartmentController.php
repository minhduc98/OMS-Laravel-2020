<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use Illuminate\Support\Facades\DB;


class DepartmentController extends Controller
{
    public function index(Request $request)
    {
        $title = 'Department';
        $departments = Department::all();
        return view('department', compact('departments', 'title'));
    }

    public function edit($id)
    {
        if ($id != 'new') {
            $title = 'Edit Department';
            $department = Department::findOrFail($id);
            return view('department_edit', compact('id', 'title', 'department'));
        } else {
            $title = 'New Department';
            return view('department_edit', compact('id', 'title'));
        }
    }

    public function save(Request $request)
    {
        $title = 'Edit Department';
        if ($request->id != 'new') {

            DB::transaction(function () use ($request) {

                $department = Department::find($request->id);

                $department->departmentName = $request->department_name;
                $department->departmentName_v = $request->department_name_v;
                $department->shortName = $request->department_shortName;

                $department->save();
            });
        } else {
            DB::transaction(function () use ($request) {
                $data = [
                    'departmentName' => $request->department_name,
                    'departmentName_v' => $request->department_name_v,
                    'shortName' => $request->department_shortName,

                ];
                // dd($data);
                $department = Department::create($data);
            });
        }

        return redirect()->action('DepartmentController@index');
    }

    public function delete(Request $request)
    {
        $department = Department::find($request->id);
        $department->delete();

        return redirect()->action('DepartmentController@index');
    }
}
