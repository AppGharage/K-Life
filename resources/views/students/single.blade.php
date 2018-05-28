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
                            {!! Form::open() !!}
                            <div class="form-group">
                                {{form::label('firstname', 'First Name')}}
                                {{form::text('firstname', $student->firstname, ['class' => 'form-control', 'placeholder' => 'Please Enter Student Firstname','disabled' =>'disabled'] )}}
                            </div>
                            <div class="form-group">
                                {{form::label('lastname', 'Last Name')}}
                                {{form::text('lastname', $student->lastname, ['class' => 'form-control', 'placeholder' => 'Please Enter Student Lastname','disabled' =>'disabled'])}}
                            </div>
                            <div class="form-group">
                                {{form::label('indexNo', 'Index No')}}
                                {{form::text('indexNo', $student->indexNo, ['class' => 'form-control', 'placeholder' => 'Please Enter Student Index Number','disabled' =>'disabled'])}}
                            </div>
                            <div class="form-group">
                                {{form::label('email', 'Email')}}
                                {{form::email('email', $student->email, ['class' => 'form-control', 'placeholder' => 'Please Enter Student Email Address','disabled' =>'disabled'])}}
                            </div>  
                            <div class="form-group">
                                {{form::label('phone', 'Phone')}}
                                {{form::number('phone', $student->phone, ['class' => 'form-control', 'placeholder' => 'Please Enter Student Phone Number','disabled' =>'disabled'])}}
                            </div>      
                        {!! Form::close() !!}
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