<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn('short_description');
            $table->dropColumn('image');
            $table->string('hero_image_for_desktop');
            $table->string('hero_image_for_mobile');
            $table->string('first_team_member_image');
            $table->string('first_team_member_name');
            $table->string('first_team_member_position');
            $table->text('first_team_member_text');
            $table->string('second_team_member_image');
            $table->string('second_team_member_name');
            $table->string('second_team_member_position');
            $table->text('second_team_member_text');
            $table->text('text_under_pdf')->nullable();
            $table->unsignedBigInteger('first_post_id')->index()->nullable();
            $table->foreign('first_post_id')->references('id')->on('posts')->onDelete('set null');
            $table->unsignedBigInteger('second_post_id')->index()->nullable();
            $table->foreign('second_post_id')->references('id')->on('posts')->onDelete('set null');
            $table->unsignedBigInteger('third_post_id')->index()->nullable();
            $table->foreign('third_post_id')->references('id')->on('posts')->onDelete('set null');
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
            $table->string('short_description');
            $table->string('image');
        });
    }
}
