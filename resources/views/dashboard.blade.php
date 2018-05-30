@extends('layouts.app')
@section('stylesheet')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection
@include('inc.sidebar')
@section('content')
    <br>
    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
    @endif  
   <div class="all-cards">
    <div class="top-cards">
        <div class="item">
            <div class="icon-content">
                    <i class="fas fa-users top-card-icon" ></i>
                    <b class="icon-text">Student(s)</b>  
                    <p class="card-value">{{count($students)}}</p>
            </div>
        </div>
        <div class="item">
            <div class="icon-content1">
                    <i class="fas fa-clipboard-list top-card-icon"></i>   
                    <b class="icon-text">Issue(s)</b>  
                   <p class="card-value">{{count($students)}}</p>
                     
            </div>
        </div>
        <div class="item">
            <div class="icon-content">
                    <i class="fas fa-bullhorn top-card-icon" ></i>
                    <b class="icon-text">Announcement(s)</b>  
                   <p class="card-value">{{count($students)}}</p>
                   
            </div>
        </div>
    </div>
    <br><br>
    <div class="bottom-cards">
        <div class="item2">
            <p class="sub-title">
                 Recent Students
            </p>
          
        </div>
        <div class="item2">
               <p class="sub-title">
                     Current issues
               </p>
        </div>
    </div>
    </div>
</div>  
@endsection
