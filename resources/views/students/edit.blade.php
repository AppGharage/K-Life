@extends('layouts.app')
@include('inc.sidebar')
@section('stylesheet')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection
    @section('content')
    <br>

    <div class="row justify-content-center">
            <div class="col-md-8 container">
            <div class="card ">
                <div class="card-header the-header">
                        <b>Update Student Information</b>        
                </div>
                <a onclick="history.go(-1)"class="btn btn-light pull-right">Back</a>
                <br>
                    
                    <div class="card-body">
                    {!! Form::open(['action'=> ['StudentsController@update', $student->id], 'method' => 'POST'] ) !!}
                        <div class="form-group">
                            {{form::label('firstname', 'First Name')}}
                            {{form::text('firstname', $student->firstname, ['class' => 'form-control', 'placeholder' => 'Please Enter Student Firstname'])}}
                        </div>
                        <div class="form-group">
                            {{form::label('lastname', 'Last Name')}}
                            {{form::text('lastname', $student->lastname, ['class' => 'form-control', 'placeholder' => 'Please Enter Student Lastname'])}}
                        </div>
                        <div class="form-group">
                            {{form::label('indexNo', 'Index No')}}
                            {{form::text('indexNo', $student->indexNo, ['class' => 'form-control', 'placeholder' => 'Please Enter Student Index Number'])}}
                        </div>
                        <div class="form-group">
                            {{form::label('email', 'Email')}}
                            {{form::email('email', $student->email, ['class' => 'form-control', 'placeholder' => 'Please Enter Student Email Address'])}}
                        </div>  
                        <div class="form-group">
                            {{form::label('phone', 'Phone')}}
                            {{form::number('phone', $student->phone, ['class' => 'form-control', 'placeholder' => 'Please Enter Student Phone Number'])}}
                        </div>   
                        {{form::hidden('_method', 'PUT')}}
                        <div class="center-btn">
                                {{form::submit('Update', ['class'=> 'the-button'])}}
                        </div>  
                    {!! Form::close() !!}
              
                </div>
            </div>
        </div>
    </div>
    </div>
    @endsection