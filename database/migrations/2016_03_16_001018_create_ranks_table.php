<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ranks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('abbreviation');
            $table->string('name');
            $table->string('pay_grade');
            $table->integer('weight')->default(0);
            $table->integer('promotion_points')->default(0);
            $table->integer('time_in_grade')->default(0);
            $table->integer('next_rank')->nullable();
            $table->string('image');
            $table->text('training_required')->default('');
            $table->unsignedInteger('teamspeak_group')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ranks');
    }
}
