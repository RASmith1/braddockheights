<?php

class BhcaMember extends Eloquent {

    # The guarded properties specifies which attributes should *not* be mass-assignable
    protected $guarded = array('id', 'created_at', 'updated_at');
    
	/**
	* Identify relation between BhcaMember and CommitteeMember
	*/
	public function committeeMember() {
        # One BhcaMember maps to possibly many CommitteeMembers
        # Define a one-to-many relationship.
        return $this->hasMany('CommitteeMember');
    }
    
    /*********************************************************************
	* When editing or adding a new committee member, we need a select dropdown 
    * of BHCA members to choose from. A select is easy to generate when you 
    * have a key=>value pair to work with. This method will generate a key=>value 
    * pair of bhca member id => bhca member name
	*
	* @return Array
	*/
    public static function getIdNamePair() {

		$bhca_members = Array();

		$collection = BhcaMember::all();

        /* We put this in the first entry so it shows up */
        /* as first item in select list that is created  */
        /* from this array.*/
        $bhca_members[0] = "Please select";
        
		foreach($collection as $bhca_member) {
			/*$bhca_members[$bhca_member->id] = $bhca_member->first_name + ' ' + $bhca_member->middle_name + ' ' + $bhca_member->last_name;*/
		    $bhca_members[$bhca_member->id] = $bhca_member->full_name;    
        }

		return $bhca_members;
	}

    
    /*********************************************************************
    *
    * @return String
    */
    public static function sendNewsletterEmails($users,$newsletter_link) {

        $recipients = '';

        foreach($users as $user) {

            Mail::send('emails.newsletter_link', $data, function($message) {

                $recipient_email = $user->email;
                $recipient_name  = $user->first_name.' '.$user->last_name;
                $subject  = 'Latest Braddock Heights Historical Society Newsletter available now.';

                $message->to($recipient_email, $recipient_name)->subject($subject);

            });

            $recipients .= $user->email.', ';

        }

        $recipients = rtrim($recipients, ',');

        return $recipients;
    }
}