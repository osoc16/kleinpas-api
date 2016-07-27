<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableEventsMake extends Migration
{
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('phonenumber');
            $table->string('email');
            $table->string('place');
            $table->date('date');
            $table->time('start');
            $table->time('end');
        });
    }

    public function down()
    {
        Schema::drop('events');
    }
}
