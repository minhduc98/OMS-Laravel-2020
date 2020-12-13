<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\Diploma;

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
}
