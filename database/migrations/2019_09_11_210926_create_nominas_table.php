<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNominasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nominas', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->decimal('cedula');
            $table->date('fechadepago');
            $table->string('cargo');
            $table->decimal('diaslaborados');
            $table->decimal('salario');
            $table->decimal('salariodia');
            $table->decimal('auxtransporte');
            $table->decimal('auxilionosalarial');
            $table->decimal('recargonocturno');
            $table->decimal('hed');
            $table->decimal('hen');
            $table->decimal('hedf');
            $table->decimal('henf');
            $table->decimal('totaldevengado');
            $table->decimal('dctoeps');
            $table->decimal('dctoafp');
            $table->decimal('prestamos');
            $table->decimal('ahorrofondo');
            $table->decimal('totaldeducciones');
            $table->decimal('totalapagar');
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
        Schema::dropIfExists('nominas');
    }
}
