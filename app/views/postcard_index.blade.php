@extends('_master') 
@section('title') Historical Postcards 
@stop 

@section('head')
     <script type="text/javascript">
          jQuery(function ($) {

               $.supersized({

                    // Functionality
                    slide_interval: 4000, // Length between transitions
                    transition: 1, // 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
                    transition_speed: 700, // Speed of transition

                    // Components							
                    slide_links: 'blank', // Individual links for each slide (Options: false, 'num', 'name', 'blank')
                    slides: [ // Slideshow Images
                         {
                              image: '/images/postcards/BH_Grove_of_Golden_Stars.jpg',
                              title: 'Braddock Heights Grove of the Golden Stars'
                         }, {
                              image: '/images/postcards/BH_Washington_Cottage.jpg',
                              title: 'Washington Cottage in Braddock Heights, MD'
                         }, {
                              image: '/images/postcards/BH_roller_rink.jpg',
                              title: 'Braddock Heights Roller Rink'
                         }, {
                              image: '/images/postcards/BH_roller_rink2.jpg',
                              title: 'Second picture of Braddock Heights Roller Rink'
                         }, {
                              image: '/images/postcards/BH_carousel_horse.jpg',
                              title: 'Braddock Heights Carousel Horse'
                         }, {
                              image: '/images/postcards/BH_Dance_Hall.jpg',
                              title: 'Braddock Heights Dance Hall'
                         }, {
                              image: '/images/postcards/md_braddock_heights01.gif',
                              title: 'View of Braddock Heights'
                         }, {
                              image: '/images/postcards/BH_from_Observatory.jpg',
                              title: 'View of Braddock Spring from the Observatory'
                         }, {
                              image: '/images/postcards/BH_Schley_Inn.jpg',
                              title: 'Camp Schley Inn and Lovers Lane'
                         }, {
                              image: '/images/postcards/BH_Picnic_Day.jpg',
                              title: 'Braddock Heights Picnic Day'
                         }, {
                              image: '/images/postcards/BH_Spring.jpg',
                              title: 'Braddock Spring Near the Six-Mile House'
                         }, {
                              image: '/images/postcards/BH_Spring2.jpg',
                              title: 'Second picture of Braddock Spring'
                         }
                     ]
               });
          });
     </script>

     <style type="text/css">
          ul#demo-block {
               margin: 0 15px 15px 15px;
          }
          ul#demo-block li {
               margin: 0 0 10px 0;
               padding: 10px;
               display: inline;
               float: left;
               clear: both;
               color: #aaa;
               background: url('/images/Supersized/bg-black.png');
               font: 11px Helvetica, Arial, sans-serif;
          }
          ul#demo-block li a {
               color: #eee;
               font-weight: bold;
          }
     </style>
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

          <?php $thisPage="Historical Postcards" ; ?>
          <header class="row">
               @include('includes.header_and_nav')
          </header>

          <div id="postcard_frame_wrapper">

               <iframe id="generic_frame" src='/postcard/slide-show' width="960" height="615"></iframe>

          </div>
     </div>
@stop @section('footer')
<footer class="row">
     @include('includes.footer')
</footer>
@stop
