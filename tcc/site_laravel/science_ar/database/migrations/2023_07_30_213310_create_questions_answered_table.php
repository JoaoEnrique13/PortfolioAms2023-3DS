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
        Schema::create('questions_answered', function (Blueprint $table) {
            $table->id('id_question_answered');
            $table->unsignedBigInteger("id_quiz_answered");//PK da tabela quizzes_answered
            $table->unsignedBigInteger("id_answer");//PK da tabela answes
            $table->foreign('id_quiz_answered')->references('id_quiz_answered')->on('quizzes_answered');
            $table->foreign('id_answer')->references('id_answer')->on('answers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions_answered');
    }
};
