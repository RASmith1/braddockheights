@extends('_master')

@section('title')
	Log in
@stop

@section('content')

<div id="board_wrapper">
        
        <?php $thisPage="Login" ; include( "/../app/views/header_and_nav.blade.php"); ?>

        <div id="board_frame_wrapper">
            
            <h1>Log in</h1>
            
            {{ Form::open(array('url' => '/login')) }}

            {{ Form::label('email') }}
            {{ Form::text('email','bucknbeck@verizon.net') }}

            {{ Form::label('password') }} (bnb1234)
            {{ Form::password('password') }}

            {{ Form::submit('Submit') }}

            {{ Form::close() }}

        </div>
    </div>




@stop