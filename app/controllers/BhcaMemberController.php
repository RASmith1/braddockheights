<?php

class BhcaMemberController extends \BaseController {

    
    public function __construct() {

		# Make sure BaseController construct gets called
		parent::__construct();

	}
    
    
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $bhca_members = BhcaMember::all();
		return View::make('bhca_member_index')->with('bhca_members', $bhca_members);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('bhca_member_create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        
       /* $bhca_member->first_name   = 'Amy';
        $bhca_member->middle_name  = 'Ann';
        $bhca_member->last_name    = 'Adams';
        $bhca_member->first_email  = 'AAA@gmail.com';
        $bhca_member->second_email = 'AAA@verizon.net';
        $bhca_member->address      = 'AAA Alberta Ave.\nAlberta, AL 00000';
        $bhca_member->initial_date_of_membership     = '2014-12-15';
        $bhca_member->date_of_last_processed_payment = '2014-12-15';
        $bhca_member->save();*/
        
		$rules = array(
            'first_name' => 'required',
            'last_name' => 'required',
			'first_email' => 'required|email',
            'second_email' => 'email',
            'address' => 'required|max:255',
            'initial_date_of_membership' => 'date',
            'date_of_last_processed_payment' = 'required|date'
		);

		$validator = Validator::make(Input::all(), $rules);

		if($validator->fails()) {

            return Redirect::to('bhca_member/create')
                    ->with('flash_message','<b class="crud_flash_message">Create BHCA Member failed; please fix the errors listed below.</b>')
                    ->withInput()
                    ->withErrors($validator);
		}
        
        $bhca_member = new BhcaMember;
		$bhca_member->first_name = Input::get('first_name');
        $bhca_member->middle_name = Input::get('middle_name');
        $bhca_member->last_name = Input::get('last_name');
        $bhca_member->first_email = Input::get('first_email');
        $bhca_member->second_email = Input::get('second_email');
        $bhca_member->address = Input::get('address');
        $bhca_member->initial_date_of_membership = Input::get('initial_date_of_membership');
        $bhca_member->date_of_last_processed_payment = Input::get('date_of_last_processed_payment');
        /*$bhca_member->save();*/
        
		return Redirect::action('BhcaMemberController@index')
                    ->with('flash_message','<b class="crud_flash_message">Your BHCA Member has been successfully added.</b>')
                    ->with('flash_type', 'alert-success');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
