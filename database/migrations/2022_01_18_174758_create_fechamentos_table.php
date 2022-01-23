<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFechamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fechamentos', function (Blueprint $table) {
            $table->id();
            $table->string('agente');
            $table->string('clube');
            $table->string('tipoFechamento');
            $table->string('porcentagem');
            $table->date('dataFechamento');
            $table->float('rake_cash');
            $table->float('rake_mtt');
            $table->float('rake_uniao');
            $table->float('total_rake');
            $table->float('resultado_cash');
            $table->float('resultado_mtt');
            $table->float('resultado_uniao');
            $table->float('total_resultado');
            $table->float('resultado');
            $table->float('rake_total');
            $table->float('rack_back');
            $table->string('comissao');
            $table->float('final');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fechamentos');
    }
}
