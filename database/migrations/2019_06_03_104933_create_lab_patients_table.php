<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLabPatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lab_patients', function (Blueprint $table) {
            $table->increments('patient_id');
            $table->integer('inst_id');
            $table->string('p_lastname',50)->nullable();
            $table->string('p_firstname',50)->nullable();
            $table->string('p_middlename',50)->nullable();
            $table->date('p_birthday')->nullable();
            $table->string('p_address',50)->nullable();
            $table->string('p_email',50)->nullable();
            $table->string('remarks',100)->nullable();
            $table->integer('user_id');
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
        Schema::dropIfExists('lab_patients');
    }
}
