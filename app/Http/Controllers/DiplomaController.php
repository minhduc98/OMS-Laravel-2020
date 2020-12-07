<?php

namespace App\Http\Controllers;

use App\Imports\ImportDiploma;
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

    public function import_excel(Request $request)
    {
        $title = 'Import Excel for Diploma';
        if ($request->isMethod('get')) {
            return view('diploma_import_excel', compact('title'));
        } else {
            $request->validate([
                'file' => 'required|file|mimes:xlsx',
            ]);
            \DB::beginTransaction();
            try {
                (new ImportDiploma)->import($request->file('file'));
                \DB::commit();
                return redirect()->action('DiplomaController@index');
            } catch (\Illuminate\Database\QueryException $e) {
                \DB::rollBack();
            }
            return redirect()->action('DiplomaController@index');
        }
    }

    public function edit($id)
    {
        $students = Student::pluck('student_code', 'id');
        if ($id != 'new') {
            $title = 'Edit Diploma';
            $diploma = Diploma::findOrFail($id);
            return view('diploma_edit', compact('id', 'title', 'students', 'diploma'));
        } else {
            $title = 'New Diploma';
            return view('diploma_edit', compact('id', 'title', 'students'));
        }
    }

    public function save(Request $request)
    {
        $title = 'Edit Diploma';
        if ($request->id != 'new') {

            DB::transaction(function () use ($request) {

                $diploma = Diploma::find($request->id);

                $diploma->student_id = $request->student_id;
                $diploma->ranking = $request->ranking;
                $diploma->ranking_v = $request->ranking_v;
                $diploma->graduationYear = $request->graduationYear;
                $diploma->diplomaNumber = $request->diplomaNumber;
                $diploma->diplomaNote = $request->diplomaNote;

                $diploma->save();
            });
        } else {
            DB::transaction(function () use ($request) {
                $data = [
                    'student_id' => $request->student_id,
                    'ranking' => $request->ranking,
                    'ranking_v' => $request->ranking_v,
                    'graduationYear' => $request->graduationYear,
                    'diplomaNumber' => $request->diplomaNumber,
                    'diplomaNote' => $request->diplomaNote ,
                ];
                $diploma = Diploma::create($data);
            });
        }

        return redirect()->action('DiplomaController@index');
    }

    public function delete(Request $request)
    {
        $diploma = Diploma::find($request->id);
        $diploma->delete();

        return redirect()->action('DiplomaController@index');
    }

    public function letter(Request $request)
    {
        $diploma_id = $request->id;

        $diploma = Diploma::findOrFail($diploma_id);
        $student = Student::findOrFail( $diploma->student_id);

        $profile = Profile::findOrFail($student->profile_id);
        $major = Major::findOrFail($student->major_id);

        $currentDate = date("d.m.Y");

        $pdf = \PDF::loadView('pdf.letter', compact('diploma', 'major', 'profile', 'student', 'currentDate'))->setPaper('A4', 'portrait');

        return $pdf->download('abc.pdf');
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

        return $pdf->download('abc.pdf');

    }
}
