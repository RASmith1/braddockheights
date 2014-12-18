<?php

class CommitteeMember extends Eloquent {

    # The guarded properties specifies which attributes should *not* be mass-assignable
    protected $guarded = array('id', 'created_at', 'updated_at');

    /*********************************************************************/
    /**
    * CommitteeMember belongs to BhcaMember
    * Define an inverse one-to-many relationship.
    */
	public function bhcaMember() {

        return $this->belongsTo('BhcaMember');

    }

}