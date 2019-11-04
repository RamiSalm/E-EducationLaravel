<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function ministry($ministry)
    {
 
        $students=Session('students');
        $directorates=Session('directorates');

        return view('ministry/'.$ministry)->with('nav',$ministry)->with('students',$students)
                ->with('directorates',$directorates);
    }
    public function directorate($directorate)
    {
        $students=Session('students');
        $Schools=Session('Schools');

        return view('directorate/'.$directorate)->with('nav',$directorate)->with('students',$students)
                ->with('Schools',$Schools);
    }
    public function school($school)
    {
        return view('school/home')->with('nav',$school);
    }
    public function teacher($teacher)
    {
        return view('teacher/home')->with('nav',$teacher);
    }
    public function student($student)
    {
        return view('student/home')->with('nav',$student);
    }
    public function father($father)
    {
        return view('father/home')->with('nav',$father);
    }
}
