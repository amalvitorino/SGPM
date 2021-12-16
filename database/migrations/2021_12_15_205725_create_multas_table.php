<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMultasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('multas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('automobilistaID')->constrained('automobilistas');
            $table->string('numeroMulta');
            $table->string('descricao');
            $table->string('artigo');
            $table->double('valorApagr', 8, 2);
            $table->double('multaAGravada', 8, 2)->default(0);
            $table->boolean('estado')->default(false);
            $table->date('dataInic');
            $table->date('dataPagamento')->nullable();
            $table->date('dataFim');
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
        Schema::dropIfExists('multas');
    }
}
