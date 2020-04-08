<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_curso');
            $table->foreign('id_curso')->references('id')->on('curses')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('id_aluno');
            $table->foreign('id_aluno')->references('id')->on('students')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('id_instrutor');
            $table->foreign('id_instrutor')->references('id')->on('instructors')->onDelete('cascade')->onUpdate('cascade');

            $table->date('data_matricula')->nullable();
            $table->double('nota1', 8, 2);
            $table->double('nota2', 8, 2);
            $table->date('data_certificado')->nullable();
            $table->string('identificador_certificado');
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
        Schema::dropIfExists('registrations');
    }
}
