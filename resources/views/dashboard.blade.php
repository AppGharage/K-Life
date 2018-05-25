@extends('layouts.app')
@section('stylesheet')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection
@include('inc.sidebar')
@section('content')

<div class="container  ">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header header-text">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class=" text-center">
                        <h4>Welcome {{ Auth::user()->name }}</h4>
                        <p>You have -</p>
                        <h1> 
                            {{-- {{count($students)}}  --}}
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                        </h1>
                        <p>Students</p>
                        <br>
                        <p><a class="btn the-button text-light btn-md" href="/create" role="button">Register Student</a> | <a class="btn the-button text-light  btn-md" href="./students" role="button">Manage Student </a></p>            
                    </div>
                </div>
            </div>
        </div>
    <br>
    <br>
        <div class="col-md-3 float-right">
            <div class="card flex-md-row mb-4 box-shadow h-md-250">
              <div class="card-body d-flex flex-column align-items-start">
                  <input type="text" placeholder="Issue Topic">
                  <br><br>
                 <input type="datetime" placeholder="Date and Time">
                  <br><br>
                  
                  <p style="font-size: 20px">Visibility Status</p>
                  <label class="switch">
                  <input type="checkbox">
                  <span class="slider round"></span>
                  </label>
              </div>
            </div>
          </div>
    </div>

</div>
@endsection
