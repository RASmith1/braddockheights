<?php

class BoardController extends BaseController {

    #******************************************************
    # This creates an object of class BoardController
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
    # GET: http://localhost/board/index
    
	public function getIndex() {

        return View::make('board_index');

	}

    #******************************************************

    /*# GET: http://localhost/board/member
	public function getMember() {
        
		return View::make('board_member'); 
        
	}
    
    # POST: http://localhost/board/member
	public function postMember() {
        
		return View::make('board_member'); 
        
	}*/
}
