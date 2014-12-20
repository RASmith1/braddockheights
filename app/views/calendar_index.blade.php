@extends('_master') 

@section('title') 
    Calendar of Events 
@stop 

@section('head') 
@stop 

@section('content')

    <div id="calendar_wrapper">

        <?php $thisPage="Calendar of Events" ; ?>
        <header class="row">
		      @include('includes.header_and_nav')
	    </header>

        <div id="calendar_frame_wrapper">

            <iframe id="generic_frame" src="https://www.google.com/calendar/embed?title=Braddock%20Heights%20Calendar%20of%20Events&amp;showTz=0&amp;height=800&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=bucknbeck%40verizon.net&amp;color=%232952A3&amp;src=en.usa%23holiday%40group.v.calendar.google.com&amp;color=%23691426&amp;ctz=America%2FNew_York" width="960" height="615"></iframe>
        </div>

    </div>
@stop

@section('footer')        
    <footer class="row">
		@include('includes.footer')
	</footer>
@stop 
