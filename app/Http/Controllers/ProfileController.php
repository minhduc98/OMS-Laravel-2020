<?php

namespace App\Http\Controllers;

use App\Imports\ImportProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function import_excel(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('profile_import_excel');
        } else {
            $request->validate([
                'file' => 'required|file|mimes:xlsx',
            ]);
            \DB::beginTransaction();
            try {
                (new ImportProfile)->import($request->file('file'));
                \DB::commit();
                return redirect()->action('ProfileController@index');
            } catch (\Illuminate\Database\QueryException $e) {
                \DB::rollBack();
            }
            return redirect()->action('ProfileController@index');
        }
    }
}
