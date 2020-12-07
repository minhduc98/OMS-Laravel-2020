<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Diploma;
use App\Models\Major;
use App\Models\Profile;
use Illuminate\Support\Facades\DB;

use PDF;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class DiplomaController extends Controller
{
    public function index()
    {
        $title = 'Diploma';
        $diplomas = Diploma::all();
        $student_codes = [];
        $count = count($diplomas);
        foreach ($diplomas as $diploma) {
            $student = new Student();
            $student_code = Student::where('id', $diploma->student_id)->value('student_code');
            array_push($student_codes, $student_code);
        }
        return view('diploma', compact('title', 'count', 'diplomas', 'student_codes'));
    }

    public function pdf(Request $request)
    {
        $diploma_id = $request->id;

        $diploma = Diploma::findOrFail($diploma_id);
        $student = Student::findOrFail( $diploma->student_id);

        $profile = Profile::findOrFail($student->profile_id);
        $major = Major::findOrFail($student->major_id);

        $data = [
            'Student Name' => $profile->value('fullName'),
            'Ranking' => $diploma->value('ranking'),
            'Major' => $major->value('MajorName')
        ];

        $jsonData = json_encode($data);
        $qrCode = base64_encode(QrCode::size(40)->generate($jsonData));

        $path = public_path('img/abc.jpg');
        $image = base64_encode(file_get_contents($path));

        $pdf = \PDF::loadView('pdf.diploma', compact('diploma', 'major', 'profile', 'student', 'qrCode', 'image'))->setPaper('A4', 'portrait');
        // $pdf = \PDF::loadView('pdf.diploma', compact('qrCode'))->setPaper('a4', 'portrait');

        return $pdf->download('abc.pdf');

    }
}
