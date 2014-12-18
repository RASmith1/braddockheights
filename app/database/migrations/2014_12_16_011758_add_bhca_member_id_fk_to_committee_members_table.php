<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBhcaMemberIdFkToCommitteeMembersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('committee_members',function($table) {
            # Important! FK has to be unsigned because the PK 
            # it will reference is auto-incrementing
            $table->integer('bhca_member_id')->unsigned(); 

            # Define foreign keys...
            $table->foreign('bhca_member_id')->references('id')->on('bhca_members'); 
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('committee_members', function($table) {
            $table->dropColumn('bhca_member_id');
        });
	}
}
