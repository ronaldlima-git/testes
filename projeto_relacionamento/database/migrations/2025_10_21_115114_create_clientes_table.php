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
        Schema::create('clientes', function (Blueprint $table) 
        {
            $table->id();
            $table->foreignId('user_id')->constrained();//Pega o o nome da tabela, coloca no singular, e _id (user_id)
            $table->string('nome',255);
            $table->string('telefone',255)->nullable();
            $table->string('email',255)->unique();
            $table->string('senha',255)->nullable();
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
        Schema::dropIfExists('clientes');
    }
};
