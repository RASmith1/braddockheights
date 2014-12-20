@extends('_master')

@section('title')
	Log in
@stop

@section('content')

<div id="board_wrapper">
        
        <?php $thisPage="Signup" ; ?>
        <header class="row">
		      @include('includes.header_and_nav')
	    </header>

        <div id="board_frame_wrapper">

            <h1>Sign up</h1>

            @foreach($errors->all() as $message)
                <div class='error'>{{ $message }}</div>
            @endforeach

            {{ Form::open(array('url' => '/signup')) }}

                {{ Form::label('First Name') }}
                {{ Form::text('first_name') }}

                {{ Form::label('Last Name') }}
                {{ Form::text('last_name') }}

                {{ Form::label('email') }}
                {{ Form::text('email') }}

                {{ Form::label('password') }}
                {{ Form::password('password') }}
                <small>Min 6 characters</small>

                {{ Form::submit('Submit') }}

            {{ Form::close() }} 

        </div>
    </div>

@stop