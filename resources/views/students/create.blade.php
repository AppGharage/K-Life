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
                        <div class="card lg-6 a">
                            <div class="card-header header-text"><b>Register a Student</b></div>
                            {!! Form::open(['action'=> 'StudentsController@store', 'method' => 'POST'] ) !!}
                                    <div class="the-form">
                                        {{form::label('firstname', 'First Name')}}
                                        {{form::text('firstname', '', ['class' => 'the-input', 'placeholder' => 'e.g Kojo'])}}
                                    </div>
                                    <div class="the-form">
                                        {{form::label('lastname', 'Last Name')}}
                                        {{form::text('lastname', '', ['class' => 'the-input', 'placeholder' => 'e.g Yeboah'])}}
                                    </div>
                                    <div class="the-form">
                                        {{form::label('indexNo', 'Index No')}}
                                        {{form::text('indexNo', '', ['class' => 'the-input', 'placeholder' => 'e.g KUS01234'])}}
                                    </div>
                                    <div class="the-form">
                                            {{form::label('email', 'Email')}}
                                            {{form::email('email', '', ['class' => 'the-input', 'placeholder' => 'e.g kojoyeboah@eample.com'])}}
                                    </div>  
                                    <div class="the-form">
                                            {{form::label('phone', 'Phone')}}
                                            {{form::number('phone', '', ['class' => 'the-input', 'maxlength' => '10','placeholder' => 'e.g 0239876543'])}}
                                    </div>  
                                    <div class="button-container">
                                       {{form::submit('Create!', ['class'=> 'the-button'])}}
                                    </div>    
                            {!! Form::close() !!}
                        </div>
                </div>
            </div>
        </div>    
    @endsection