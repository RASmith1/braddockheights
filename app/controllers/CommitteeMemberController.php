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
        

            /*$rules = array(
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required|email'
            );

            $validator = Validator::make(Input::all(), $rules);

            if($validator->fails()) {

                return Redirect::to('committee_member/create')
                        ->with('flash-message','<b class="crud_flash_message">Create Committee Member failed; please fix the errors listed below.</b>')
                        ->withInput()
                        ->withErrors($validator);                        
*/
            /* From this site: http://maxoffsky.com/code-blog/uploading-files-in-laravel-4/ */
            /* One method for uploading a file. */
            
            /*$file = Input::file('file');
            $destinationPath = 'uploads';
            // If the uploads fail due to file system, you can try doing public_path().'/uploads' 
            $filename = str_random(12);
            //$filename = $file->getClientOriginalName();
            //$extension =$file->getClientOriginalExtension(); 
            $upload_success = Input::file('file')->move($destinationPath, $filename);
*/
   /*         if( $upload_success ) {
               return Response::json('success', 200);
            } else {
               return Response::json('error', 400);
            }*/
        
            $committee_member = new CommitteeMember;
            $committee_member->bhca_member_id = Input::get('bhca_member_id');
            $committee_member->first_name = Input::get('first_name');
            $committee_member->middle_name = Input::get('middle_name');
            $committee_member->last_name = Input::get('last_name');
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
        
		/*catch(exception $e) {
		    return Redirect::to('/committee_member/create')
                ->with('flash_message', '<b class="crud_flash_message">Creation failed for committee-member information entered.</b>')
                ->withInput()
                ->withErrors($validator); */
		
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
		$bhca_members = BhcaMember::getIdNamePair($id);

    	return View::make('committee_member_edit')->with('id', $id);
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
			/*$committee_member = CommitteeMember::findOrFail($id);*/
            $committee_member = CommitteeMember::with($id);

		}
		catch(Exception $e) {
            return Redirect::action('CommitteeMemberController@getIndex')->with('flash-message','<b class="crud_flash_message">Committee member not found</b>');
		}

        try {
		    # http://laravel.com/docs/4.2/eloquent#mass-assignment
		    $committee_member->fill(Input::except('bhca_member_id'));
		    $committee_member->save();

		   	return Redirect::action('CommitteeMemberController@getIndex')->with('flash_message','<b class="crud_flash_message">Your changes have been saved.</b>');

		}
		catch(exception $e) {
	        return Redirect::to('/committee_member')->with('flash_message', 'Error saving changes.');
	    }
        /*$committee_member->bhca_member_id = Input::get('bhca_member_id');
        $committee_member->first_name = Input::get('first_name');
        $committee_member->middle_name = Input::get('middle_name');
        $committee_member->last_name = Input::get('last_name');
        $committee_member->email = Input::get('email');
        $committee_member->committee_position = Input::get('committee_position');
        $committee_member->bio = Input::get('bio');
        $committee_member->bhca_board_member = Input::get('bhca_board_member');
        $committee_member->bhca_pool_committee_member = Input::get('bhca_pool_committee_member');
        $committee_member->finance_committee_member = Input::get('finance_committee_member');
        $committee_member->programs_committee_member = Input::get('programs_committee_member');
        $committee_member->property_committee_member = Input::get('property_committee_member');
        $committee_member->membership_committee_member = Input::get('membership_committee_member');
        $committee_member->save();*/ 

	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		CommitteeMember::destroy($id);
    
  	    return Redirect::to('/board')->with('flash-message', '<b class="crud_flash_message">Committee member deleted.</b>');
        /*return Redirect::action('CommitteeMemberController@index')
                        ->with('flash-message','<b class="crud_flash_message">Committee Member has been successfully deleted.</b>');*/
	}


}
