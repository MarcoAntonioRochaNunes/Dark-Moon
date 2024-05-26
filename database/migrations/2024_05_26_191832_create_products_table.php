<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('foto')->nullable();
            $table->string('nome');
            $table->string('marca');
            $table->string('categoria');
            $table->integer('estrelas');
            $table->float('valor');
            $table->string('descricao');
            $table->integer('oferta')->nullable();
            $table->string('tipo');
            $table->string('tamanho_pp')->nullable();
            $table->string('tamanho_p')->nullable();
            $table->string('tamanho_m')->nullable();
            $table->string('tamanho_g')->nullable();
            $table->string('tamanho_gg')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
