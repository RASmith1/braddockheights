<?php

class IndexController extends BaseController {

	/**************************************************/

	public function __construct() {

		# Make sure BaseController construct gets called
		parent::__construct();
        
        $this->beforeFilter('csrf', array('on' => 'post'));

	}

	/**************************************************/
	
	public function getIndex() {

		return View::make('index');

	}

}