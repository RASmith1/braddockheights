<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBhcaPoolCommitteeMemberFieldToCommitteeMembersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('committee_members',function($table) {
            $table->boolean('bhca_pool_committee_member');
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
            $table->dropColumn('bhca_pool_committee_member');
        });
	}

}
