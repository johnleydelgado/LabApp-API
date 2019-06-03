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
            $table->integer('patient_id');
            $table->integer('waiver_code')->nullable();
            $table->string('patient_name',70)->nullable();
            $table->string('barcode',70)->nullable();
            $table->string('u_gender',10)->nullable();
            $table->string('u_address',255)->nullable();
            $table->string('signature',190)->nullable();
            $table->string('crea_clear',20)->nullable();
            $table->string('remarks',100)->nullable();
            $table->string('added_by',20)->nullable();
            $table->string('edit_by',20)->nullable();
            $table->dateTime('edit_when')->nullable();
            $table->string('released_by',20)->nullable();
            $table->dateTime('released_when')->nullable();
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
        Schema::dropIfExists('transaction_information');
    }
}
