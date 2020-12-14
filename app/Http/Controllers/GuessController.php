<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Profile;
use App\Models\Student;
use App\Mail\AutoSendMail;

class GuessController extends Controller
{
    public function index()
    {
        $title = 'Guess access';
        $profiles = Profile::pluck('fullName','id');
        return view('guess', compact('title', 'profiles'));
    }


    public function send(Request $request)
    {
        $company_name = $request->company_name;
        $to = $request->mail;
        $profile_id = $request->name;
        $profile = Profile::where('id', $profile_id);
        $student_code = Student::where('profile_id', $profile->value('id'))->value('student_code');

        $address = $profile->value('Address') . '  ' . $profile->value('City') . '  ' . $profile->value('Country');
        $details = [
            'company_name' => $company_name,
            'to' => $to,
            'fullName' => $profile->value('fullName'),
            'student_code' => $student_code,
            'gender' => $profile->value('gender'),
            'DOB' => $profile->value('DOB'),
            'POB' => $profile->value('POB'),
            'Nationality' => $profile->value('Nationality'),
            'Ethnicity' => $profile->value('Ethnicity'),
            'Mail' => $profile->value('Mail'),
            'PhoneNumber' => $profile->value('PhoneNumber'),
            'MartialStatus' => $profile->value('MartialStatus'),
            'Address' => $address
        ];
        Mail::to($to)->send(new AutoSendMail($details));
        return redirect()->action('GuessController@index');
    }
}
