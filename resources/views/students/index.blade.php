@extends('layouts.app')
@section('stylesheet')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection
@include('inc.sidebar')
    @section('content')
        <div class="row justify-content-center">
            <div class="col col-md-8 float-right">
                <div class="card-header"><h2>Students</h2></div>
                <div class="card container text-center text-secondary">
                    <br>
                        @if(count($students) > 0)
                                    <h3>{{count($students)}} Student(s) and still counting...</h3>
                                        <table class="table text-secondary">
                                            <tr>
                                                <th>Full Name</th>
                                                <th>Index Number</th>
                                                <th>Email Address</th>
                                                <th>Phone Number</th>
                                                <th>Date Created</th>
                                            </tr>
                                                @foreach($students as $student)
                                                    <tr>
                                                        <td><a class="text-info" href="./students/{{$student->id}}">{{$student->firstname}} {{$student->lastname}}</a></td>
                                                        <td>{{$student->indexNo}}</td>
                                                        <td>{{$student->email}}</td>
                                                        <td>{{$student->phone}}</td>
                                                        <td><small>Student created on {{$student->created_at}}</small></td>
                                                    </tr>
                                                @endforeach
                                        </table>  
                            {{$students->links()}}
                        @else
                            <p>No Students Available :'(</p>
                        @endif
                </div>
            </div>
        </div>
    @endsection