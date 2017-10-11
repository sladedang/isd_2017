<?php

use Illuminate\Database\Schema\Blueprint;
use \App\Database\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('email');
            $table->string('password', 60);
            $table->date('dob')->nullable();
            $table->integer('phone')->nullable();
            $table->integer('gender')->nullable();
            $table->string('address')->nullable();
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
