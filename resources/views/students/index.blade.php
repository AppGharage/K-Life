@extends('layouts.app')
@section('stylesheet')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection
@include('inc.sidebar')
    @section('content')
    <div class="card">
                <div class="card-header the-header"><h2>Students</h2></div>
                <div class=" text-center text-secondary">
                    <br>
                        @if(count($students) > 0)
                                    <h6>{{count($students)}} Student(s) and still counting...</h6>
                                        <table class=" container table table-responsive text-secondary">
                                            <tr class="table-secondary">
                                                <th>Full Name</th>
                                                <th>Index Number</th>
                                                <th>Email Address</th>
                                                <th>Phone Number</th>
                                                <th></th>
                                            </tr>
                                                @foreach($students as $student)
                                                    <tr>
                                                        <td><a class="text-dark" href="/students/{{$student->id}}">{{$student->firstname}} {{$student->lastname}}</a></td>
                                                        <td>{{$student->indexNo}}</td>
                                                        <td>{{$student->email}}</td>
                                                        <td>{{$student->phone}}</td>
                                                        <td><a href="/students/{{$student->id}}" class ="btn btn-sm btn-secondary">View</a></td>
                                                    </tr>
                                                @endforeach
                                        </table>  
                            {{$students->links()}}
                        @else
                            <p>No Students Available :'(</p>
                        @endif
               
            </div>
        </div>
    @endsection