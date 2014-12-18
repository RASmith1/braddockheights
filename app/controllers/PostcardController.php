<?php

class PostcardController extends BaseController {

    #******************************************************
    # This creates an object of class PostcardController
    public function __construct() {

		# Make sure BaseController construct gets called
		parent::__construct();
        
        $this->beforeFilter('csrf', array('on' => 'post'));

	}
    
    #******************************************************
	#Special method that gets triggered if the user enters a URL for a method that does not exist

	public function missingMethod($parameters = array()) {

		return 'Method "'.$parameters[0].'" not found';

	}
    
	#******************************************************
    # GET: http://localhost/postcard
    
	public function getIndex() {

        return View::make('postcard_index');

	}

    #******************************************************

    # GET: http://localhost/postcard/slide-show
	public function getSlideShow() {
        
		return View::make('postcard_slide_show');
        
	}
    
    # POST: http://localhost/postcard/slide-show
	public function postSlideShow() {
        
		return View::make('postcard_slide_show');
        
	}
}
