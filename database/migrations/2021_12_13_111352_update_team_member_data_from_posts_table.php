<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTeamMemberDataFromPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->string('first_team_member_image')->nullable()->change();
            $table->string('first_team_member_name')->nullable()->change();
            $table->string('first_team_member_position')->nullable()->change();
            $table->text('first_team_member_text')->nullable()->change();
            $table->string('second_team_member_image')->nullable()->change();
            $table->string('second_team_member_name')->nullable()->change();
            $table->string('second_team_member_position')->nullable()->change();
            $table->text('second_team_member_text')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->string('first_team_member_image')->change();
            $table->string('first_team_member_name')->change();
            $table->string('first_team_member_position')->change();
            $table->text('first_team_member_text')->change();
            $table->string('second_team_member_image')->change();
            $table->string('second_team_member_name')->change();
            $table->string('second_team_member_position')->change();
            $table->text('second_team_member_text')->change();
        });
    }
}
