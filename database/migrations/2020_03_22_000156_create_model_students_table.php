<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {    
            $table->id();
            $table->string('nome_aluno');
            $table->date('data_nascimento')-> nullable();
            $table->string('cpf', 11)->unique();
            $table->string('rg')->unique();
            $table->string('fone_celular', 11)->unique();
            $table->string('email_aluno')->unique();
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
        Schema::dropIfExists('students');
    }
}
