<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstitutionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institution', function (Blueprint $table) {
            $table->increments('ints_id');
            $table->string('i_name',100)->nullable();
            $table->string('i_address',250)->nullable();
            $table->string('i_contact_number',20)->nullable();
            $table->string('i_contact_person',30)->nullable();
            $table->string('i_remarks',100)->nullable();
            $table->integer('with_his')->nullable();
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
        Schema::dropIfExists('institution');
    }
}
