<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClubesTable extends Migration
{

    public function up()
    {
        Schema::create('clubes', function (Blueprint $table) {
            $table->id();
            $table->string('codigo',15)->unique();
            $table->string('nome',50)->unique();
        });
    }


    public function down()
    {
        Schema::dropIfExists('clubes');
    }
}
