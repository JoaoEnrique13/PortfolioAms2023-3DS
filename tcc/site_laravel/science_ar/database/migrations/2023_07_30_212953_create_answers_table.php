<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->id('id_answer');
            $table->unsignedBigInteger("id_question");//precisar ser unsignedBigInteger para ser chave estrangeira
            $table->foreign('id_question')->references('id_question')->on('questions');//chave estrangeira da tabela questions
            $table->text('text_answer');
            $table->boolean('correct');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('answers');
    }
};
