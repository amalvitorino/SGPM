<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutomobilistasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('automobilistas', function (Blueprint $table) {
            $table->id();
            $table->string('numCarta');
            $table->string('nome');
            $table->string('apelido');
            $table->string('sexo');
            $table->date('dataNascimento');
            $table->string('nacionalidade');
            $table->string('morada');
            $table->string('tipoDoc');
            $table->string('numDoc');
            $table->string('categoriaCarta');
            $table->date('dataIncValidade');
            $table->date('dataFimValidade');
            $table->boolean('divida')->default(false);
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
        Schema::dropIfExists('automobilistas');
    }
}
