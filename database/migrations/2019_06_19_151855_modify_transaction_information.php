<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyTransactionInformation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('transaction_information', function (Blueprint $table) {
            $table->dropColumn('u_gender');
            $table->dropColumn('u_address');
            $table->dropColumn('patient_name');
            $table->dropColumn('user_id');
            $table->string('pdf',50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('transaction_information', function (Blueprint $table) {
            $table->string('u_gender',10)->nullable();
            $table->string('u_address',255)->nullable();
            $table->string('patient_name',70)->nullable();
            $table->integer('user_id');
            $table->dropColumn('pdf');
        });
    }
}
