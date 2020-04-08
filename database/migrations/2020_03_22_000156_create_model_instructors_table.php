<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelInstructorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instructors', function (Blueprint $table) {    
            $table->id();
            $table->string('nome_instrutor');
            $table->date('data_nascimento')-> nullable();
            $table->string('cpf', 11)->unique();
            $table->string('rg')->unique();
            $table->string('fone_celular', 11)->unique();
            $table->string('email_instrutor')->unique();
            $table->string('mini_curriculum');
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
        Schema::dropIfExists('instructors');
    }
}
