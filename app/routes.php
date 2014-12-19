<?php

/*
Note there are no before=>csrf filters in here - it's being handled in the BaseController
*/

/*
Route::get('/classes', function() {

	echo Paste\Pre::render(get_declared_classes(),'');

});
*/

/* To find out what environment you're running in ******************/

Route::get('/get-environment',function() {

    echo "Environment: ".App::environment();

});

/********************************************************************/
/* Call this route to purposely trigger an error, to see how debbing*/ 
/* is being handled.                                                */

Route::get('/trigger-error',function() {

    # Class Foobar should not exist, so this should create an error
    $foo = new Foobar;

});

/* Test that your database connection is workign *******************/

Route::get('mysql-test', function() {

    # Print environment
    echo 'Environment: '.App::environment().'<br>';

    # Use the DB component to select all the databases
    $results = DB::select('SHOW DATABASES;');

    # If the "Pre" package is not installed, you should output using print_r instead
    echo Pre::render($results);

});

/*****************************************************************/
/**
* User
* (Explicit Routing)
*/
Route::get('/signup','UserController@getSignup' );
Route::get('/login', 'UserController@getLogin' );
Route::post('/signup', 'UserController@postSignup' );
Route::post('/login', 'UserController@postLogin' );
Route::get('/logout', 'UserController@getLogout' );


/* Lock down this route *******************************************/

/*Route::get('/list/{format?}', 
    array(
        'before' => 'auth', 
        function($format = 'html') {
            # rest of your list code goes here...
        }
    )
);*/

/* Index ***********************************************************/

Route::get('/', 'IndexController@getIndex');

/* Postcards - Implicit Routing ************************************/

Route::controller('/postcard', 'PostcardController');

/* Calendar - Implicit Routing *************************************/

Route::controller('/calendar', 'CalendarController');

/* Board (BHCA Board) - Implicit Routing ***************************/

Route::controller('/board', 'BoardController');

/* committee_member ************************************************/
/**
* (Implicit RESTful Routing)
*/
Route::resource('committee_member', 'CommitteeMemberController');

/* Newsletter *******************************************************/

Route::get('/newsletter', 'NewsletterController@getIndex');
Route::get('/newsletter/show', 'NewsletterController@getShow');
Route::post('/newsletter/show', 'NewsletterController@postShow');

/* Map ***************************************************************/

Route::get('/maps', 'MapController@showMaps');

/* Truncate **********************************************************/
/* Quick and dirty route to clear a bunch of tables while testing ****/
/* Change table names to match my own. *******************************/                           

Route::get('/truncate', function() {

    # Clear the tables to a blank slate
    # Disable FK constraints so that all rows can be deleted, even if 
    # there's an associated FK
    DB::statement('SET FOREIGN_KEY_CHECKS=0'); 
    DB::statement('TRUNCATE committee_members');
    DB::statement('TRUNCATE bhca_members');
    DB::statement('TRUNCATE users');
    
    echo "Truncate has completed.";
});

/*********************************************************************
* For uploading files - e.g. the picture file on the create for a 
* Committee Member.  This information was found online at:
* http://clivern.com/how-to-create-file-upload-with-laravel/
*/

Route::get('form', function(){
    return View::make('form');
});

Route::any('form-submit', function(){
    var_dump(Input::file('file'));
});

/* Get temporary file name given to our file on temporary location. */

/*Route::any('form-submit', function(){
 return Input::file('file')->getFilename();
});*/

/* Get the actual name of the file when it was uploaded. */

Route::any('form-submit', function(){
 return Input::file('file')->getClientOriginalName();
});

/*********************************************************************
* This will output some debugging information about application's   
* environment and database connection. */


/*
Route::get('/debug', function() {

    echo '<pre>';

    echo '<h1>environment.php</h1>';
    $path   = base_path().'/environment.php';

    try {
        $contents = 'Contents: '.File::getRequire($path);
        $exists = 'Yes';
    }
    catch (Exception $e) {
        $exists = 'No. Defaulting to `production`';
        $contents = '';
    }

    echo "Checking for: ".$path.'<br>';
    echo 'Exists: '.$exists.'<br>';
    echo $contents;
    echo '<br>';

    echo '<h1>Environment</h1>';
    echo App::environment().'</h1>';

    echo '<h1>Debugging?</h1>';
    if(Config::get('app.debug')) echo "Yes"; else echo "No";

    echo '<h1>Database Config</h1>';
    print_r(Config::get('database.connections.mysql'));

    echo '<h1>Test Database Connection</h1>';
    try {
        $results = DB::select('SHOW DATABASES;');
        echo '<strong style="background-color:green; padding:5px;">Connection confirmed</strong>';
        echo "<br><br>Your Databases:<br><br>";
        print_r($results);
    } 
    catch (Exception $e) {
        echo '<strong style="background-color:crimson; padding:5px;">Caught exception: ', $e->getMessage(), "</strong>\n";
    }

    echo '</pre>';

});

*/
