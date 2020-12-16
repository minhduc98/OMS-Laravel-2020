<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\Diploma;
use App\Models\Student;
use App\Models\Major;
use App\Models\Year;
use App\Models\Search;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $statistics_function = function($total, $category) {
            $new_arr = array_count_values($total);

            foreach ($category as $key) {
                $time[] = $new_arr[$key];
            }
            return $time;
        };
        $total_POB = Profile::pluck('POB')->toArray();
        $category_POB = Profile::distinct()->pluck('POB')->toArray();

        $total_ranking = Diploma::pluck('ranking')->toArray();
        $category_ranking = Diploma::distinct()->pluck('ranking')->toArray();

        $time_POB = $statistics_function($total_POB, $category_POB);
        $time_ranking = $statistics_function($total_ranking, $category_ranking);

        return view('home', compact('category_POB', 'time_POB', 'category_ranking', 'time_ranking'));
    }

    public function search(Request $request)
    {
        $title = 'Search Information';
        if ($request->has('search') == false) {
            $keyword = '';
        } else {
            $keyword = $request->get('search');
        }
        if ($keyword != ''){
            $search_profile = Profile::when($keyword, function($q, $keyword) {
                $q->where('fullName', 'like', "%$keyword%")
                ->orWhere('fullName_v', 'like', "%$keyword%")
                ->orWhere('DOB', 'like', "%$keyword%")
                ->orWhere('Nationality', 'like', "%$keyword%")
                ->orWhere('Ethnicity', 'like', "%$keyword%")
                ->orWhere('Mail', 'like', "%$keyword%")
                ->orWhere('PhoneNumber', 'like', "%$keyword%")
                ->orWhere('Address', 'like', "%$keyword%")
                ->orWhere('City', 'like', "%$keyword%")
                ->orWhere('Country', 'like', "%$keyword%");
            });
            $search_diploma = Profile::when($keyword, function($q, $keyword) {
                $q->where(function($qq) use ($keyword) {
                    $qq->whereHas('student', function($query) use ($keyword){
                        $query->whereHas('diploma', function($query1) use ($keyword) {
                            $query1->where('ranking', 'like', "%$keyword%")
                            ->orWhere('ranking_v', 'like', "%$keyword%")
                            ->orWhere('graduationYear', 'like', "%$keyword%")
                            ->orWhere('diplomaNumber', 'like', "%$keyword%")
                            ->orWhere('diplomaNote', 'like', "%$keyword%");
                        });
                    });
                });
            });
            $search_student = Profile::when($keyword, function($q, $keyword) {
                $q->where(function($qq) use ($keyword) {
                    $qq->whereHas('student', function($query) use ($keyword){
                        $query->where('student_code', 'like',  "%$keyword%");
                    });
                });
            });
            $search_major = Profile::when($keyword, function($q, $keyword) {
                $q->where(function($qq) use ($keyword) {
                    $qq->whereHas('student', function($query) use ($keyword){
                        $query->whereHas('major', function($query1) use ($keyword) {
                            $query1->where('MajorName', 'like', "%$keyword%")
                            ->orWhere('MajorName_v', 'like', "%$keyword%")
                            ->orWhere('shortName', 'like', "%$keyword%");
                        });
                    });
                });
            });
            $search_year = Profile::when($keyword, function($q, $keyword) {
                $q->where(function($qq) use ($keyword) {
                    $qq->whereHas('student', function($query) use ($keyword){
                        $query->whereHas('major', function($query1) use ($keyword) {
                            $query1->whereHas('year', function($query2) use ($keyword) {
                                $query2->where('year', 'like', "%$keyword%");
                            });
                        });
                    });
                });
            });
            // $searches = $search_profile->union($search_student)->union($search_diploma)
            //                     ->union($search_major)->union($search_year)->get();
            $searches = $search_profile->get();
            $majorNames = [];
            $yearNames = [];
            $student_codes = [];
            $diplomas = [];
            $count = count($searches);
            foreach($searches as $search) {
                $profile_id = $search->id;
                $student = Student::where('profile_id', $profile_id);
                $major = Major::findOrFail($student->value('major_id'));
                $year = Year::findOrFail($major->year_id);
                $diploma = Diploma::where('student_id', $student->value('id'))->first();
                array_push($student_codes, $student->value('student_code'));
                array_push($majorNames, $major->MajorName);
                array_push($yearNames, $year->year);
                array_push($diplomas, $diploma);
            }
            Search::query()->truncate();
            for($i = 0; $i < $count; $i++) {
                $search = new Search();
                $search->student_code = $student_codes[$i];
                $search->fullName = $searches[$i]->fullName;
                $search->fullName_v = $searches[$i]->fullName_v;
                $search->gender = $searches[$i]->gender;
                $search->DOB = $searches[$i]->DOB;
                $search->DOB_v = $searches[$i]->DOB_v;
                $search->POB = $searches[$i]->POB;
                $search->POB_v = $searches[$i]->POB_v;
                $search->Nationality = $searches[$i]->Nationality;
                $search->Ethnicity =  $searches[$i]->Ethnicity;
                $search->Mail = $searches[$i]->Mail;
                $search->PhoneNumber = $searches[$i]->PhoneNumber;
                $search->MartialStatus = $searches[$i]->MartialStatus;
                $search->Address = $searches[$i]->Address;
                $search->City = $searches[$i]->City;
                $search->Country = $searches[$i]->Country;
                $search->MajorName = $majorNames[$i];
                $search->year = $yearNames[$i];
                if ($diplomas[$i]) {
                    $search->ranking = $diplomas[$i]->ranking;
                    $search->ranking_v = $diplomas[$i]->ranking_v;
                    $search->graduationYear = $diplomas[$i]->graduationYear;
                    $search->diplomaNumber = $diplomas[$i]->diplomaNumber;
                    $search->diplomaNote = $diplomas[$i]->diplomaNote;
                } else {
                    $search->ranking = NULL;
                    $search->ranking_v = NULL;
                    $search->graduationYear = NULL;
                    $search->diplomaNumber = NULL;
                    $search->diplomaNote = NULL;
                }
                $search->save();
            }
        }
        $search_results = Search::paginate(2);

        return view('search', compact('title', 'search_results'));
    }

}
