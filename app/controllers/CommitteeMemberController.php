<?php

class CommitteeMemberController extends \BaseController {

   /* public function jsVars() {

		# Bind a variable called 'bar'
		JavaScript::put(['email' => Auth::user()->email]);

		return View::make('demo_jsVars');

	}*/

    
    /**
	*
	*/
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
        $committee_members = CommitteeMember::all();
		return View::make('committee_member_index')->with('committee_members', $committee_members);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $bhca_members = BhcaMember::getIdNamePair();

    	return View::make('committee_member_create')->with('bhca_members', $bhca_members);
	}
    
    
    /**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{   
        try 
        {
            $committee_member = new CommitteeMember;
            $committee_member->bhca_member_id = Input::get('bhca_member_id');
            $committee_member->first_name = Input::get('first_name');
            $committee_member->middle_name = Input::get('middle_name');
            $committee_member->last_name = Input::get('last_name');
            
           /* $committee_member->picture = Input::file('picture');*/
            /*$filename = $file->getClientOriginalName(); 
            $file = $file->move('/images/people',  $filename);*/
            /*$committee_member->picture = $file;*/
            
            $committee_member->picture = Input::get('picture');
            $committee_member->email = Input::get('email');
            $committee_member->committee_position = Input::get('committee_position');
            $committee_member->bio = Input::get('bio');
            $committee_member->bhca_board_member = Input::get('bhca_board_member');
            $committee_member->bhca_pool_committee_member = Input::get('bhca_pool_committee_member');
            $committee_member->finance_committee_member = Input::get('finance_committee_member');
            $committee_member->programs_committee_member = Input::get('programs_committee_member');
            $committee_member->property_committee_member = Input::get('property_committee_member');
            $committee_member->membership_committee_member = Input::get('membership_committee_member');
            $committee_member->save();
            
            return Redirect::action('CommitteeMemberController@index')
                    ->with('flash_message','<b class="crud_flash_message">Your Committee Member has been successfully added.</b>');
        }
		catch(Exception $e) {
            return Redirect::to('/committee_member')->with('flash_message','<b class="crud_flash_message">Committee member not created.</b>');
		}
        
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return Redirect::action('CommitteeMemberController@index')
                    ->with('flash_message','<b class="crud_flash_message">This feature has not yet been implemented although all others have been.</b>');
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		try {
			$committee_member = CommitteeMember::findOrFail($id);  
		}
		catch(Exception $e) {
            return Redirect::to('/committee_member')->with('flash_message','<b class="crud_flash_message">Committee member not found</b>');
		}
        
        # Pass with the $committee_member object so we can do model binding on the form
		return View::make('committee_member_edit')->with('committee_member', $committee_member);

	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        try {
			$committee_member = CommitteeMember::findOrFail($id);
		}
		catch(Exception $e) {
			return Redirect::to('/committee_member')->with('flash_message', '<b class="crud_flash_message">Committee member not found.</b>');
		}
       
        try
        {
            /*$committee_member->picture = Input::file('picture');*/
            /*$file = Input::file('picture');
            $filename = $file->getClientOriginalName(); 
            $file = $file->move('/images/people',  $filename);
            $committee_member->picture      = $file;*/
            $committee_member->picture = Input::get('picture');
            $committee_member->first_name   = Input::get('first_name');
            $committee_member->middle_name  = Input::get('middle_name');
            $committee_member->last_name    = Input::get('last_name');
            $committee_member->email        = Input::get('email');

            $position = Input::get('committee_position');

            if ($position != 'Please select') {
                $committee_member->committee_position = $position;
            }

            $committee_member->bio          = Input::get('bio');
            $committee_member->bhca_board_member = Input::get('bhca_board_member');
            $committee_member->bhca_pool_committee_member = Input::get('bhca_pool_committee_member');
            $committee_member->finance_committee_member = Input::get('finance_committee_member');
            $committee_member->programs_committee_member = Input::get('programs_committee_member');
            $committee_member->property_committee_member = Input::get('property_committee_member');
            $committee_member->membership_committee_member = Input::get('property_committee_member');
            $committee_member->save();

            return Redirect::action('CommitteeMemberController@index')->with('flash_message','<b class="crud_flash_message">Your committee member update has been saved.</b>');
		}
		catch(Exception $e) {
            return Redirect::to('/committee_member')->with('flash_message','<b class="crud_flash_message">Update of committee member failed.</b>');
		}
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
       	try {
			$committee_member = CommitteeMember::findOrFail($id);
		}
		catch(Exception $e) {
			return Redirect::to('/committee_member')->with('flash_message', '<b class="crud_flash_message">Committee member not found</b>');
		}

		# Note there could be a `deleting` Model event to make sure related entries in other tables 
        # are also destroyed, if that's ever needed.  That would go in CommitteeMember.php model.  
		CommitteeMember::destroy($id);

		return Redirect::action('CommitteeMemberController@index')
                         ->with('flash_message','<b class="crud_flash_message">Your committee member has been deleted.</b>');
        
	}

}
