<?php

class CalendarController extends BaseController {

    #******************************************************
    # This creates an object of class CalendarController
    public function __construct() {

		# Make sure BaseController construct gets called
		parent::__construct();
        
        $this->beforeFilter('csrf', array('on' => 'post'));

	}
    
    #******************************************************
	# Special method that gets triggered if the user enters a URL 
    # for a method that does not exist

	public function missingMethod($parameters = array()) {

		return 'Method "'.$parameters[0].'" not found';

	}
    
	#******************************************************
    # GET: http://localhost/calendar
    
	public function getIndex() {

        return View::make('calendar_index');

	}

    #******************************************************

    /*# GET: http://localhost/calendar/show
	public function getShow() {
        
		return View::make('calendar_show');
        
	}
    
    # POST: http://localhost/calendar/show
	public function postShow() {
        
		return View::make('calendar_show');
        
	}*/
}
