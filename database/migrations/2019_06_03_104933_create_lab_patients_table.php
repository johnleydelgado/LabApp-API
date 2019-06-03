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
            $table->string('p_lastname',50);
            $table->string('p_firstname',50);
            $table->string('p_middlename',50);
            $table->date('p_birthday');
            $table->string('p_address',50);
            $table->string('p_email',50);
            $table->string('remarks',100);
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
