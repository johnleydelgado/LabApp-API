<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLabUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lab_users', function (Blueprint $table) {
        $table->increments('user_id');
        $table->string('u_username',70)->nullable();
        $table->string('password',191)->nullable();
        $table->string('u_fullname',70)->nullable();
        $table->string('u_gender',10)->nullable();
        $table->string('u_emailaddress')->unique()->nullable();
        $table->string('u_mobilenumber',15)->nullable();
        $table->string('u_role',50)->nullable();
        $table->integer('inst_id');
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
        Schema::dropIfExists('lab_users');
    }
}
