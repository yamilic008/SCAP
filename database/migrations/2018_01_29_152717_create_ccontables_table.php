<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCcontablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ccontables', function (Blueprint $table) {
            $table->increments('id');
            $table->string('CuentaContable');
            $table->unsignedInteger('cuentas_id');
            $table->unsignedInteger('seccions_id');
            $table->timestamps();

            $table->foreign('cuentas_id')->references('id')->on('cuentas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('seccions_id')->references('id')->on('seccions')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ccontables');
    }
}
