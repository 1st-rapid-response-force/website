<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->unsignedInteger('avatar');
            $table->unsignedInteger('cat_card');
            $table->string('searchable');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('assignment_id')->nullable();
            $table->unsignedInteger('rank_id')->nullable();
            $table->unsignedInteger('face_id')->nullable();
            $table->tinyInteger('status')->nullable();
            $table->tinyInteger('clearance')->default(34);
            $table->boolean('oncall_status')->default(0);
            $table->string('oncall_phone')->nullable();
            $table->string('oncall_type')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('users', function ($table) {
            $table->foreign('file_id')->references('user_id')->on('files')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function ($table) {
            $table->dropForeign('users_file_id_foreign');
        });
        Schema::drop('files');

    }
}
