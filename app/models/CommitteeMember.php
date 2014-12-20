<?php

class CommitteeMember extends Eloquent {

    # The guarded properties specifies which attributes should *not* be mass-assignable
    protected $guarded = array('id', 'created_at', 'updated_at');
    
    # Enable fillable on the appropriate columns so we can use the Model shortcut Create
	protected $fillable = array('picture', 'first_name', 'last_name', 
                                'email', 'committee_position', 'bio', 
                                'bhca_board_member',
                                'bhca_pool_committee_member',
                                'finance_committee_member',
                                'programs_committee_member',
                                'property_committee_member',
                                'membership_committee_member');
    
    /*********************************************************************/
    /**
    * CommitteeMember belongs to BhcaMember
    * Define an inverse one-to-many relationship.
    */
	public function bhcaMember() {

        return $this->belongsTo('BhcaMember');

    }
    
    # Model events...
	# http://laravel.com/docs/eloquent#model-events
	public static function boot() {

        parent::boot();

        static::deleting(function($committee_member) {
            DB::statement('DELETE FROM committee_members WHERE id = ?', array($committee_member->id));
        });

	}

}