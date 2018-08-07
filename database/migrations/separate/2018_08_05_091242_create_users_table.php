<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::dropIfExists('users');

        Schema::create('users', function (Blueprint $table) {
          $table->increments('user_id');
          $table->string('first_name');
          $table->string('last_name');
          $table->string('user_name')->unique();
          $table->integer('age');
          $table->string('gender');
          $table->string('password');
          $table->string('profile_picture');


          $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
