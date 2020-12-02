<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Year;
use Illuminate\Support\Facades\DB;

class YearController extends Controller
{
    public function index(Request $request)
    {
        $title = 'Year';
        $years = Year::all();
        return view('year', compact('years', 'title'));
    }

    public function edit($id)
    {
        if ($id != 'new') {
            $title = 'Edit Year';
            $year = Year::findOrFail($id);
            return view('year_edit', compact('id', 'title', 'year'));
        } else {
            $title = 'New Year';
            return view('year_edit', compact('id', 'title'));
        }
    }

    public function save(Request $request)
    {
        $title = 'Edit Year';
        if ($request->id != 'new') {

            DB::transaction(function () use ($request) {

                $year = Year::find($request->id);

                $year->year = $request->year;

                $year->save();
            });
        } else {
            DB::transaction(function () use ($request) {
                $data = [
                    'year' => $request->year,
                ];
                $year = Year::create($data);
            });
        }

        return redirect()->action('YearController@index');
    }

    public function delete(Request $request)
    {
        $year = Year::find($request->id);
        $year->delete();

        return redirect()->action('YearController@index');
    }
}
