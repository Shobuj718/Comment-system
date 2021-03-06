<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRatingsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('ratings', function (Blueprint $table) {

            $table->engine = 'InnoDB';

            $table->increments('id');            
            $table->integer('rating');
            $table->morphs('rateable');
            $table->bigInteger('user_id')->unsigned();
            $table->index('rateable_id');
            $table->index('rateable_type');
            //$table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('ratings');
    }
}
