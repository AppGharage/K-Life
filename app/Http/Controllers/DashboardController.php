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
        return view('pages.index');
    }
    public function dashboard()
    {
        $students = Student::orderBy('firstname', 'desc')->paginate(10);
        return view('dashboard')->with('students', $students);
    }
    public function message()
    {
        return view('students.message');
    }
}
