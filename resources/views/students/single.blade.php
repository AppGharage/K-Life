@extends('layouts.app')
@section('stylesheet')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection
@include('inc.sidebar')
    @section('content')
        @include('inc.messages')
        <div class="row justify-content-center">
                <div class="col-md-8 container">
                    <div class="card ">
                        <a onclick="history.go(-1)"class="btn btn-light">Back</a>
                        <br>
                        <div class="container">
                            <h1>{{$student->firstname}} {{$student->lastname}}</h1>
                                <p>{{$student->indexNo}}</p>
                                <hr>
                                {{$student->email}}
                                <hr>
                                {{$student->phone}}
                                <hr>
                                <small>Student Created at {{$student->created_at}}</small>
                                <hr>
                                <a href="./{{$student->id}}/edit" class="btn btn-primary">Edit Student</a>
                                {!! Form::open(['action'=> ['StudentsController@destroy', $student->id], 'method' => 'POST', 'class' => 'float-right'] ) !!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete' ,['class' => 'btn btn-danger'])}}
                                {!! Form::close() !!}
                        </div>
                    </div>
                </div>
        </div>
        </div>
    @endsection