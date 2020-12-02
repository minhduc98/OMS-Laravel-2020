<?php

namespace App\Http\Controllers;

use App\Imports\ImportProfile;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        $title = 'Profile';
        $profiles = Profile::all();
        return view('profile', compact('profiles', 'title'));
    }

    public function edit($id)
    {
        if ($id != 'new') {
            $title = 'Edit Profile';
            $profile = Profile::findOrFail($id);
            return view('profile_edit', compact('id', 'title', 'profile'));
        } else {
            $title = 'New Profile';
            return view('profile_edit', compact('id', 'title'));
        }
    }

    public function save(Request $request)
    {
        $title = 'Edit Profile';
        if ($request->id != 'new') {

            DB::transaction(function () use ($request) {

                $profile = Profile::find($request->id);

                $profile->fullName = $request->profile_name;
                $profile->fullName_v = $request->profile_name_v;
                $profile->gender = $request->gender;
                $profile->DOB = $request->profile_dob;
                $profile->DOB_v = $request->profile_dob_v;
                $profile->POB = $request->profile_pob;
                $profile->POB_v = $request->profile_pob_v;
                $profile->Nationality = $request->profile_nationality;
                $profile->Ethnicity = $request->profile_ethnicity;
                $profile->Mail = $request->profile_email;
                $profile->PhoneNumber = $request->profile_phoneNumber;
                $profile->MartialStatus = $request->martialStatus;
                $profile->Address = $request->profile_address;
                $profile->City = $request->profile_city;
                $profile->Country = $request->profile_country;

                $profile->save();
            });
        } else {
            DB::transaction(function () use ($request) {
                $data = [
                    'fullName' => $request->profile_name,
                    'fullName_v' => $request->profile_name_v,
                    'gender' => $request->gender,
                    'DOB' => $request->profile_dob,
                    'DOB_v' => $request->profile_dob_v,
                    'POB' => $request->profile_pob,
                    'POB_v' => $request->profile_pob_v,
                    'Nationality' => $request->profile_nationality,
                    'Ethnicity' => $request->profile_ethnicity,
                    'Mail' => $request->profile_email,
                    'PhoneNumber' => $request->profile_phoneNumber,
                    'MartialStatus' => $request->martialStatus,
                    'Address' => $request->profile_address,
                    'City' => $request->profile_city,
                    'Country' => $request->profile_country,
                ];
                // dd($data);
                $profile = Profile::create($data);
            });
        }

        return redirect()->action('ProfileController@index');
    }

    public function delete(Request $request)
    {
        $profile = Profile::find($request->id);
        $profile->delete();

        return redirect()->action('ProfileController@index');
    }

    public function import_excel(Request $request)
    {
        $title = 'Import Excel for Profile';
        if ($request->isMethod('get')) {
            return view('profile_import_excel', compact('title'));
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
