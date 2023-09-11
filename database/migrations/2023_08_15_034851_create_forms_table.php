<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_completo',150);
            $table->integer('edad');
            $table->string('correo_electronico',150);
            $table->string('numero_telefono',20);
            $table->string('distrito',250)->nullable(true);
            $table->string('direccion',250);
            $table->string('redes_sociales',250);
            $table->string('como_se_entero',250)->nullable(true);
            $table->string('mascota_adoptar');
            $table->string('interesa_otra',2);
            $table->string('familiar_alergias',300);
            $table->string('salud_mascota',300);
            $table->string('compromiso_cuidado',300);
            $table->string('opinion_esterilizacion',300);
            $table->string('pregunta_adicional',300)->nullable(true);
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
        Schema::dropIfExists('forms');
    }
}
