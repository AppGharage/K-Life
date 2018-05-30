<?php

namespace App\Http\Controllers;
use App\Student;
use Illuminate\Http\Request;

class DashboardController extends Controller
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
        $students = Student::orderBy('firstname', 'desc')->paginate(10);
        return view('dashboard')->with('students', $students);
        
    }
}
