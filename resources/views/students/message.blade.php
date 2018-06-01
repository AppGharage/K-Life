@extends('layouts.app')
@include('inc.sidebar')
@section('stylesheet')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection
    @section('content')
    <br>
    <div class="the-card">
        <div class="card-header the-header">
            <B>NEW MESSAGE</B>
            <button type="button" class="close" aria-label="Close">
                <span class="the-close" aria-hidden="true">&times;</span>
            </button>
        </div>
        <center>
        <div class="card-body the-body">
            <label for="message text-left">Please Enter Message Below:</label>
            <br>

            <textarea name="message"placeholder=" Some important anouncement goes here..." class="bottom-card" ></textarea>
        </div>
        </center>       

        <div class="card-footer the-footer">
            <button class="btn btn-sm second-button" type="button"><b>SEND</b></button> 
            <button class="btn btn-sm first-button" type="button">Save Draft</button> 
        </div>
    </div>

    @endsection