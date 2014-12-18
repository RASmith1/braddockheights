<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBhcaBoardMemberFieldToCommitteeMembersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('committee_members',function($table) {
            $table->boolean('bhca_board_member');
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
            $table->dropColumn('bhca_board_member');
        });
	}

}
