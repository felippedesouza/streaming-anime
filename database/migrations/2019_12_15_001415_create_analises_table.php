<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnalisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('analises', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('analise');
            $table->unsignedBigInteger('avaliacoes_id');
            $table->foreign('avaliacoes_id')->references('id')->on('avaliacoes');
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
        Schema::dropIfExists('analises');
    }
}