<?php

/*
|--------------------------------------------------------------------------
| Register The Laravel Class Loader
|--------------------------------------------------------------------------
|
| In addition to using Composer, you may use the Laravel class loader to
| load your controllers and models. This is useful for keeping all of
| your classes in the "global" namespace without Composer updating.
|
*/

ClassLoader::addDirectories(array(

	app_path().'/commands',
	app_path().'/controllers',
	app_path().'/models',
	app_path().'/database/seeds',

));

/*
|--------------------------------------------------------------------------
| Application Error Logger
|--------------------------------------------------------------------------
|
| Here we will configure the error logger setup for the application which
| is built on top of the wonderful Monolog library. By default we will
| build a basic log file setup which creates a single file for logs.
|
*/

Log::useFiles(storage_path().'/logs/laravel.log');

/*
|--------------------------------------------------------------------------
| Application Error Handler
|--------------------------------------------------------------------------
|
| Here you may handle any errors that occur in your application, including
| logging them or displaying custom views for specific errors. You may
| even register several error handlers to handle different types of
| exceptions. If nothing is returned, the default error view is
| shown, which includes a detailed stack trace during debug.
|
*/

App::error(function(Exception $exception, $code)
{
	# NOTE: I commented out the following statement and
	# added the code underneath, per Professor Buck's example
	#Log::error($exception);

	# In order for these to works, you need to create the following views:
	# views/403.blade.php
	# views/404.blade.php
	# views/500.blade.php
	if(Config::get('app.debug') == false) {
		# 403 Forbidden
		# The request was a valid request, but the server is refusing to respond to it. Unlike a 401 Unauthorized response, authenticating will make no difference.
	    if($code == 403) {
	        return Response::view('errors.403', array(), 403);
	    }
	    # 404 Not Found
		# The requested resource could not be found but may be available again in the future. Subsequent requests by the client are permissible.
	    elseif($code == 404) {
	    	return Response::view('errors.404', array(), 404);
	    }
		# 500 Internal Server Error
		# A generic error message, given when an unexpected condition was encountered and no more specific message is suitable.
		elseif($code == 500) {
			return Response::view('errors.500', array(), 500);
		}
		//else {
		//	return Response::view('errors.default', array(), $code);
		//}
	}

	Log::error($exception);
});

/*
|--------------------------------------------------------------------------
| Maintenance Mode Handler
|--------------------------------------------------------------------------
|
| The "down" Artisan command gives you the ability to put an application
| into maintenance mode. Here, you will define what is displayed back
| to the user if maintenance mode is in effect for the application.
|
*/

App::down(function()
{
	return Response::make("Be right back!", 503);
});

/*
|--------------------------------------------------------------------------
| Require The Filters File
|--------------------------------------------------------------------------
|
| Next we will load the filters file for the application. This gives us
| a nice separate location to store our route and application filter
| definitions instead of putting them all in the main routes file.
|
*/

require app_path().'/filters.php';

/* NOTE: I added the code below
/*
/--------------------------------------------------------------------------
/ Active State macros
/--------------------------------------------------------------------------
/ Check if the request matches the url. If so, in code, add an active class to the menu item.
/ From: http://www.laravel-tricks.com/tricks/active-state-macro
*/
HTML::macro('activeState', function($url)
{
    
    return Request::is($url) ? 'active' : '';

});

/*
/ Tests a route against the current URL for active state
/ From: http://www.laravel-tricks.com/tricks/active-states-based-on-route-names
*/
/*HTML::macro('activeState', function ($route) {
    return strpos(Request::url(), route($route)) !== false ? 'selected' : '';
});
*/

/*
|--------------------------------------------------------------------------
| Delete form macro
|--------------------------------------------------------------------------
|
| This macro creates a form with only a submit button. 
| We'll use it to generate forms that will post to a certain url with the DELETE method,
| following REST principles.
| Note: macro was obtained from forum on: http://forumsarchive.laravel.io/viewtopic.php?id=2900
*/
Form::macro('delete',function($url, $button_label='Delete',$form_parameters = array(),$button_options=array()){

    if(empty($form_parameters)){
        $form_parameters = array(
            'method'=>'DELETE',
            'class' =>'delete-form',
            'url'   =>$url
            );
    }else{
        $form_parameters['url'] = $url;
        $form_parameters['method'] = 'DELETE';
    };

    return Form::open($form_parameters)
            . Form::submit($button_label, $button_options)
            . Form::close();
});