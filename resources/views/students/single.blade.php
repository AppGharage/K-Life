@extends('layouts.app')
@section('stylesheet')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection
@include('inc.sidebar')
    @section('content')
        @include('inc.messages') <br> <br>
                    <div class="the-card ">
                        <div class="card-header the-header">
                                <b> <?php echo"$student->firstname"; ?></b>        
                        </div>
                        <div class="container">
                                <br>
                        <a onclick="history.go(-1)"class="btn btn-secondary btn-sm float-right text-light">Back</a>
                        <br> {!! Form::open() !!}
                            <div class="form-group">
                                {{form::label('firstname', 'First Name')}}
                                {{form::text('firstname', $student->firstname, ['class' => 'form-control', 'disabled' =>'disabled'] )}}
                            </div>
                            <div class="form-group">
                                {{form::label('lastname', 'Last Name')}}
                                {{form::text('lastname', $student->lastname, ['class' => 'form-control','disabled' =>'disabled'])}}
                            </div>
                            <div class="form-group">
                                {{form::label('indexNo', 'Index No')}}
                                {{form::text('indexNo', $student->indexNo, ['class' => 'form-control','disabled' =>'disabled'])}}
                            </div>
                            <div class="form-group">
                                {{form::label('email', 'Email')}}
                                {{form::email('email', $student->email, ['class' => 'form-control','disabled' =>'disabled'])}}
                            </div>  
                            <div class="form-group">
                                {{form::label('phone', 'Phone')}}
                                {{form::number('phone', $student->phone, ['class' => 'form-control','disabled' =>'disabled'])}}
                            </div>      
                        {!! Form::close() !!}
                                <small>Student Created at {{$student->created_at}}</small>
                                <hr>
                                <a href="./{{$student->id}}/edit" class="btn btn-sm btn-primary">Edit Student</a>
                                {!! Form::open(['action'=> ['StudentsController@destroy', $student->id], 'method' => 'POST', 'class' => 'float-right'] ) !!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete' ,['class' => 'btn btn-sm btn-danger'])}}
                                {!! Form::close() !!}
                        </div>
                        <br>
                    </div>
        </div>
    @endsection