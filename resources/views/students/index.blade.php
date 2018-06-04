@extends('layouts.app')
@section('stylesheet')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection
@include('inc.sidebar')
<div class="col-md-4 container">@include('inc.messages')</div>
    @section('content')
    <br> <br>
    <div class="the-card">
            <div class="card-header the-header">
                    <b>Students</b>        
            </div>
                <div class=" text-center text-secondary">
                    <br>
                        @if(count($students) > 0)
                                    <h6>{{count($students)}} Student(s) and still counting...</h6>
                                    <div class="table-responsive">
                                    
                                        <table class=" container table text-secondary">
                                            <tr class="thead-light">
                                                <th>Full Name</th>
                                                <th>Index Number</th>
                                                <th>Email Address</th>
                                                <th>Phone Number</th>
                                                <th>Action</th>
                                            </tr>
                                                @foreach($students as $student)
                                                    <tr>
                                                        <td><a class="text-dark" href="/students/{{$student->id}}">{{$student->firstname}} {{$student->lastname}}</a></td>
                                                        <td>{{$student->indexNo}}</td>
                                                        <td>{{$student->email}}</td>
                                                        <td>{{$student->phone}}</td>
                                                        <td><a href="/students/{{$student->id}}" class ="btn btn-sm view-btn">View</a></td>
                                                    </tr>
                                                @endforeach
                                        </table>  
                                           
                                    </div> 
                            {{$students->links()}}
                        @else
                            <p>No Students Available :'(</p>
                        @endif
               
            </div>
        </div>
    @endsection