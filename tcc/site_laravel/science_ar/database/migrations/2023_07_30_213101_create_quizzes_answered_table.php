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
        Schema::create('quizzes_answered', function (Blueprint $table) {
            $table->id('id_quiz_answered');
            $table->unsignedBigInteger("id_quiz");//PK da tabela quiz
            $table->unsignedBigInteger("id_user");//PK da tabela students
            $table->foreign('id_quiz')->references('id_quiz')->on('quizzes');
            $table->foreign('id_user')->references('id')->on('users');
            $table->unique(['id_user', 'id_quiz']);//um usuário não responde duas vezes o mesmo quiz
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
        Schema::dropIfExists('quizzes_answered');
    }
};
