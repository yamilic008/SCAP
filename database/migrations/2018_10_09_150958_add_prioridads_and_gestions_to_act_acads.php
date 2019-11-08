<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPrioridadsAndGestionsToActAcads extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('act_acads', function (Blueprint $table) {
        $table->unsignedInteger('prioridads_id')->after('seccions_id');
        $table->unsignedInteger('gestions_id')->after('seccions_id');

        $table->foreign('prioridads_id')->references('id')->on('prioridads');
        $table->foreign('gestions_id')->references('id')->on('gestions'); 
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('act_acads', function (Blueprint $table) {
            $table->dropColumn('prioridads_id');
            $table->dropColumn('gestions_id');
        });
    }
}
