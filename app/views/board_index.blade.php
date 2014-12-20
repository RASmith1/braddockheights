@extends('_master') 

@section('title') 
    BHCA Board 
@stop 

@section('head') 
@stop 

@section('content')

    <div id="board_wrapper">
        
       
        <?php $thisPage="BHCA_Board" ; ?>
        <header class="row">
		      @include('includes.header_and_nav')
	    </header>

        <div id="board_frame_wrapper">

            <iframe id="board_frame" src='/committee_member' width="960" height="615"></iframe>

        </div>
    </div>
@stop

@section('footer')        
    <footer class="row">
		@include('includes.footer')
	</footer>
@stop 
