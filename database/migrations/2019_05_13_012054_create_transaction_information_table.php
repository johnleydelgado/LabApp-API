<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction_information', function (Blueprint $table) {
            $table->increments('id');
            $table->string('patient_name',70)->nullable();
            $table->string('barcode',70)->nullable();
            $table->string('u_gender',10)->nullable();
            $table->string('u_address',255)->nullable();
            $table->date('date')->nullable();
            $table->string('signature',190)->nullable();
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
        Schema::dropIfExists('transaction_information');
    }
}
