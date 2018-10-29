<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserinfoTable extends Migration
{
   
    public function up()
    {
        Schema::create('userinfo',function(Blueprint $table){
            $table->increments('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('age');
            $table->string('city');
            $table->string('address');
            $table->string('contactno');
            $table->string('gender');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::drop('userinfo');
    }
}
