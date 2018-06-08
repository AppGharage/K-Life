<?php

namespace App\Http\Controllers;
use App\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

         /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $students = Student::orderBy('firstname', 'desc')->paginate(10);
        return view('students.index')->with('students', $students);
        return view('dashboard')->with('students', $students);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'firstname' => 'required',
            'lastname'  => 'required',
            'indexNo'   => 'required',
            'email'     => 'required',
            'phone'     => 'required',
        ]);

        //CREATE STUDENT
        $student = new Student;
        $student->firstname = $request->input('firstname');
        $student->lastname  = $request->input('lastname');
        $student->indexNo  = $request->input('indexNo');
        $student->email  = $request->input('email');
        $student->phone  = $request->input('phone');
        $student->save();

        return redirect('/students')->with('success', 'Whoohoo!, Student Created! :)');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = student::find($id);
       return view('students.single')->with('student', $student);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $student = student::find($id);
       return view('students.edit')->with('student', $student);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $student->firstname = $request->input('firstname');
        $student->lastname  = $request->input('lastname');
        $student->indexNo  = $request->input('indexNo');
        $student->email  = $request->input('email');
        $student->phone  = $request->input('phone');
        $student->save();
  
        return redirect('/students')->with('success', 'Whoohoo!, Student Updated! :)');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect('/students')->with('success','Whohoo! Student Deleted, Now Lets Add More ;-)');
    }
}
