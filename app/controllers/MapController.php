<?php

class MapController extends BaseController {

	/**************************************************/
	public function __construct() {

		# Make sure BaseController construct gets called
		parent::__construct();
        
        $this->beforeFilter('csrf', array('on' => 'post'));
        
        $this->beforeFilter('csrf', array('on' => 'post'));

	}

	/**************************************************/
	public function showMaps() {

		/*return View::make('a view that shows maps');*/
		return 'Made it to MapController.showMaps'.'<br>';

	}

}