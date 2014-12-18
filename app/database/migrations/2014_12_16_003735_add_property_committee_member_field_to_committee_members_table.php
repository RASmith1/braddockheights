<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPropertyCommitteeMemberFieldToCommitteeMembersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('committee_members',function($table) {
            $table->boolean('property_committee_member');
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
            $table->dropColumn('property_committee_member');
        });
	}

}
