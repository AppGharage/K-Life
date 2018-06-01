@extends('layouts.app')
@include('inc.sidebar')
@section('stylesheet')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection
    @section('content')
        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-md-8">
                        <br>
                        <div class="card">
                                <div class="card-header the-header">
                                        <b>Register a Student</b>        
                                </div>
                                <div class="card-body">
                                    {!! Form::open(['action'=> 'StudentsController@store', 'method' => 'POST'] ) !!}
                                    <div class="the-form">
                                        {{form::label('firstname', 'First Name')}}
                                        {{form::text('firstname', '', ['class' => 'form-control', 'placeholder' => 'e.g Kojo'])}}
                                    </div>
                                    <div class="the-form">
                                        {{form::label('lastname', 'Last Name')}}
                                        {{form::text('lastname', '', ['class' => 'form-control', 'placeholder' => 'e.g Yeboah'])}}
                                    </div>
                                    <div class="the-form">
                                        {{form::label('indexNo', 'Index No')}}
                                        {{form::text('indexNo', '', ['class' => 'form-control', 'placeholder' => 'e.g KUS01234'])}}
                                    </div>
                                    <div class="the-form">
                                            {{form::label('email', 'Email')}}
                                            {{form::email('email', '', ['class' => 'form-control', 'placeholder' => 'e.g kojoyeboah@eample.com'])}}
                                    </div>  
                                    <div class="the-form">
                                            {{form::label('phone', 'Phone')}}
                                            {{form::number('phone', '', ['class' => 'form-control', 'maxlength' => '10','placeholder' => 'e.g 0239876543'])}}
                                    </div>  
                                    <br>
                                    <div class="center-btn">
                                       {{form::submit('Create!', ['class'=> 'the-button'])}}
                                    </div>    
                            {!! Form::close() !!}
                        </div>
                        </div>
                </div>
            </div>
        </div>    
    @endsection