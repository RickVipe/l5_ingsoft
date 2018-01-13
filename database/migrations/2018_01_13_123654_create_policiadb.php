<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePoliciadb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('policia', function($table){
            $table->increments('id');
            $table->string('nombres', 45);
            $table->integer('sueldo');
            $table->string('sex', 45);
            $table->string('rango',12);
            $table->integer('baja');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('policia');
    }
}
