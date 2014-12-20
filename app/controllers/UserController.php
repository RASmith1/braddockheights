<?php

class UserController extends BaseController {

	/*****************************************************/

	public function __construct() {

		# Make sure BaseController construct gets called
		parent::__construct();

        $this->beforeFilter('guest',
        	array('only' => array('getLogin','getSignup')));
        
    }

    /*****************************************************/
    /*
	* Show the new user signup form
	* @return View
	*/
	public function getSignup() {

		return View::make('user_signup');

	}
    
    /*****************************************************/
    /*
	* Process the new user signup                    
	* @return Redirect                                  
    */ 
	public function postSignup() {

		# Step 1) Define the rules
		$rules = array(
			'email' => 'required|email|unique:users,email',
			'password' => 'required|min:6'
		);

		# Step 2)
		$validator = Validator::make(Input::all(), $rules);

		# Step 3
		if($validator->fails()) {

			return Redirect::to('/signup')
				->with('flash_message', 'Sign up failed; please fix the errors listed below.')
				->withInput()
				->withErrors($validator);
		}

		$user = new User;
		$user->email    = Input::get('email');
		$user->password = Hash::make(Input::get('password'));

		try {
			$user->save();
		}
		catch (Exception $e) {
			return Redirect::to('/signup')
				->with('flash_message', 'Sign up failed; please try again.')
				->withInput();
		}

		# Log in
		Auth::login($user);

        /* Because we're only using the user table to store the info */
        /* for the webmaster, we won't send an email.                */
		/*$user->sendWelcomeEmail();*/

		return Redirect::to('/')->with('flash_message', 'Welcome to Braddock Heights Home Page!');

	}

    /*****************************************************/
	/**
	* Display the login form
	* @return View
	*/
	public function getLogin() {

		return View::make('user_login');

	}

    /*****************************************************/
	/**
	* Process the login form
	* @return View
	*/
	public function postLogin() {

		$credentials = Input::only('email', 'password');

		# Note we don't have to hash the password before attempting to auth - Auth::attempt will take care of that for us
		if (Auth::attempt($credentials, $remember = false)) {
            /*Session::flash('flash_message', '<b class="crud_flash_message">Welcome Back!</b>'); */
            return Redirect::intended('/');
			/*return Redirect::intended('/')->with('flash_message', '<b class="crud_flash_message">Welcome Back!</b>');*/
		}
		else {
            /*Session::flash('flash_message', '<b class="crud_flash_message">Log in failed; please try again.</b>'); */
			return Redirect::to('/login')
				->with('flash_message', '<b class="crud_flash_message">Log in failed; please try again.</b>')
				->withInput();
		}
	}

    /*****************************************************/
	/**
	* Logout
	* @return Redirect
	*/
	public function getLogout() {

		# Log out
		Auth::logout();

		# Send them to the homepage
		return Redirect::to('/');

	}

}