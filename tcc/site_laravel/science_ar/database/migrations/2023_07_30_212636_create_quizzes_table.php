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
        Schema::create('quizzes', function (Blueprint $table) {
            $table->id('id_quiz');
            $table->unsignedBigInteger("id_admin");//precisar ser unsignedBigInteger para ser chave estrangeira
            $table->foreign('id_admin')->references('id_admin')->on('admins'); //PK de admins
            $table->string('title');
            $table->text('description');
            $table->text('img_quiz');
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
        Schema::dropIfExists('quizzes');
    }
};
