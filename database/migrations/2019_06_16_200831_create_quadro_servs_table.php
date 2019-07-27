<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuadroServsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quadro_servs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_quadro');
            $table->foreign('id_quadro')->references('id')->on('eventos');
            $table->unsignedBigInteger('id_serv');
            $table->foreign('id_serv')->references('id')->on('servicos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quadro_servs');
    }
}
