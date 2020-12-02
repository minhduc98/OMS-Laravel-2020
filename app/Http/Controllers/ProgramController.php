<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;
use Illuminate\Support\Facades\DB;

class ProgramController extends Controller
{
    public function index(Request $request)
    {
        $title = 'Program';
        $programs = Program::all();
        return view('program', compact('programs', 'title'));
    }

    public function edit($id)
    {
        if ($id != 'new') {
            $title = 'Edit Program';
            $program = Program::findOrFail($id);
            return view('program_edit', compact('id', 'title', 'program'));
        } else {
            $title = 'New Program';
            return view('program_edit', compact('id', 'title'));
        }
    }

    public function save(Request $request)
    {
        $title = 'Edit Program';
        if ($request->id != 'new') {

            DB::transaction(function () use ($request) {

                $program = Program::find($request->id);

                $program->programName = $request->program_name;
                $program->programName_v = $request->program_name_v;
                $program->shortName = $request->program_shortName;

                $program->save();
            });
        } else {
            DB::transaction(function () use ($request) {
                $data = [
                    'programName' => $request->program_name,
                    'programName_v' => $request->program_name_v,
                    'shortName' => $request->program_shortName,

                ];
                // dd($data);
                $program = Program::create($data);
            });
        }

        return redirect()->action('ProgramController@index');
    }

    public function delete(Request $request)
    {
        $program = Program::find($request->id);
        $program->delete();

        return redirect()->action('ProgramController@index');
    }
}
