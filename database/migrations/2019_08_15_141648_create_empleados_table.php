<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('Nombre');
          $table->string('SegundoNombre');
          $table->string('PrimerApellido');
          $table->string('SegundoApellido');
          $table->string('NumeroId');
          $table->string('Correo');
          $table->string('Empresa');
          $table->string('Foto');
          $table->string('Cargo');
          $table->decimal('Salario');
          $table->string('Tcontrato');
          $table->string('Estado');
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
        Schema::dropIfExists('empleados');
    }
}
