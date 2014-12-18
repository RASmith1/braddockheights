@extends('_master') 

@section('title') 
    Historical Postcards
@stop 

@section('head')
    <!--
		Supersized - Fullscreen Slideshow jQuery Plugin
		Version : 3.2.7
		Site	: www.buildinternet.com/project/supersized
		
		Author	: Sam Dunn
		Company : One Mighty Roar (www.onemightyroar.com)
		License : MIT License / GPL License
	-->  
    <link rel="stylesheet" href="/css/supersized.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="/css/supersized.shutter.css" type="text/css" media="screen" />

    <script type="text/javascript">
        jQuery(function($) {

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

    <div class="container">
        <!--Demo styles (you can delete this block)-->

        <ul id="demo-block">
            <li>
                <a href="http://buildinternet.com/project/supersized/" target="_blank">
                    <img src="/images/Supersized/supersized-logo.png" alt="Supersized logo" />
                </a>
            </li>
        </ul>

        <!--End of styles-->

        <!--Thumbnail Navigation-->
        <div id="prevthumb"></div>
        <div id="nextthumb"></div>

        <!--Arrow Navigation-->
        <a id="prevslide" class="load-item"></a>
        <a id="nextslide" class="load-item"></a>

        <div id="thumb-tray" class="load-item">
            <div id="thumb-back"></div>
            <div id="thumb-forward"></div>
        </div>

        <!--Time Bar-->
        <div id="progress-back" class="load-item">
            <div id="progress-bar"></div>
        </div>

        <!--Control Bar-->
        <div id="controls-wrapper" class="load-item">
            <div id="controls">

                <a id="play-button">
                    <img id="pauseplay" src="/images/Supersized/pause.png" alt="Pause-Play button" />
                </a>

                <!--Slide counter-->
                <div id="slidecounter">
                    <span class="slidenumber"></span>/
                    <span class="totalslides"></span>
                </div>

                <!--Slide captions displayed here-->
                <div id="slidecaption"></div>

                <!--Thumb Tray button-->
                <a id="tray-button">
                    <img id="tray-arrow" src="/images/Supersized/button-tray-up.png" alt="Button to open thumb tray" />
                </a>

                <!--Navigation-->
                <ul id="slide-list"></ul>

            </div>
        </div>
    </div>    

@stop
