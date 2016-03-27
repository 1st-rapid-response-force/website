<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSteamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('steams', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('steam_id');
            $table->boolean('vac_ban')->default(false);
            $table->boolean('arma3')->default(true);
            $table->boolean('arma3_expansion')->default(true);
            $table->integer('arma3_hours')->default(0);
            $table->boolean('online')->default(false);
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('users', function ($table) {
            $table->foreign('steam_id')->references('user_id')->on('steams')->onDelete('set null');
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
            $table->dropForeign('users_steam_id_foreign');
        });
        Schema::drop('steams');
    }
}
