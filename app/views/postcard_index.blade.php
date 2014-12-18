@extends('_master') 

@section('title') 
    Historical Postcards 
@stop 

@section('head') 
@stop 

@section('content')

<!--
		Supersized - Fullscreen Slideshow jQuery Plugin
		Version : 3.2.7
		Site	: www.buildinternet.com/project/supersized
		
		Author	: Sam Dunn
		Company : One Mighty Roar (www.onemightyroar.com)
		License : MIT License / GPL License
	-->

    <div id="postcards_wrapper">
        
        <?php $thisPage="Calendar of Events" ; include( "/../app/views/header_and_nav.blade.php"); ?>

        <div id="postcard_frame_wrapper">

            <iframe id="generic_frame" src='/postcard/slide-show' width="960" height="615"></iframe>

        </div>
    </div>
@stop

@section('footer')        
    <?php include( '/../app/views/footer.blade.php'); ?>
@stop 
