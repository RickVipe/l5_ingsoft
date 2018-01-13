<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDbingsoftDatabase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('admins', function($table){
            $table->increments('id');
            $table->string('names', 45);
            $table->string('lastname', 45);
            $table->string('position',12);
            $table->string('email', 45)->nullable();
            $table->string('phone', 45)->nullable();
            $table->string('dni', 8);
        });

        //Students

        Schema::create('students', function($table){
            $table->increments('id');
            $table->string('names', 45);
            $table->string('lastname', 45);
            $table->string('sex', 45);
            $table->string('dni', 8);
            $table->string('email', 45)->nullable();
            $table->string('phone', 45)->nullable();
        });

        //Teachers

        Schema::create('teachers', function($table){
            $table->increments('id');
            $table->string('names', 45);
            $table->string('lastname', 45);
            $table->string('dni', 8);
            $table->string('phone', 45)->nullable();
            $table->string('email', 45)->nullable();
        });

        

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('admin');
        Schema::drop('students');
        Schema::drop('teachers');
    }
}
