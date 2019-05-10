<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyLabUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lab_users', function (Blueprint $table) {
            //
        
            $table->string('password',191)->change();
            $table->string('u_role',50)->nullable();
   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return voids
     */
    public function down()
    {
         Schema::table('lab_users', function (Blueprint $table) {
            
             $table->string('password',70)->change();
             $table->dropColumn('u_role');
             
        });
    }
}
