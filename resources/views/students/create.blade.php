@extends('layouts.app')
@include('inc.sidebar')
@section('stylesheet')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection
    @section('content')
    <br><br>
                        <div class="the-card">
                                <div class="card-header the-header">
                                        <b>Register a Student</b>        
                                </div>
                                <div class="card-body">
                                    {!! Form::open(['action'=> 'StudentsController@store', 'method' => 'POST'] ) !!}
                                    <div class="the-form">
                                        {{form::label('firstname', 'First Name')}}
                                        {{form::text('firstname', '', ['class' => 'form-control', 'placeholder' => 'Kojo'])}}
                                    </div>
                                    <div class="the-form">
                                        {{form::label('lastname', 'Last Name')}}
                                        {{form::text('lastname', '', ['class' => 'form-control', 'placeholder' => 'Yeboah'])}}
                                    </div>
                                    <div class="the-form">
                                        {{form::label('indexNo', 'Index No')}}
                                        {{form::text('indexNo', '', ['class' => 'form-control', 'placeholder' => 'KUS01234'])}}
                                    </div>
                                    <div class="the-form">
                                            {{form::label('email', 'Email')}}
                                            {{form::email('email', '', ['class' => 'form-control', 'placeholder' => 'kojoyeboah@eample.com'])}}
                                    </div>  
                                    <div class="the-form">
                                            {{form::label('phone', 'Phone')}}
                                            {{form::number('phone', '', ['class' => 'form-control', 'maxlength' => '10','placeholder' => '0239876543'])}}
                                    </div>  
                                    <br>
                                    <div class="center-btn">
                                       {{form::submit('Register', ['class'=> 'the-button'])}}
                                    </div>    
                                     {!! Form::close() !!}
                            </div>
                        </div>
    @endsection