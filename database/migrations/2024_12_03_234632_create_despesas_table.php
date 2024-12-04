<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('despesas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->decimal('valor', 10, 2);
            $table->string('descricao');
            $table->foreignId('categoria_id')->constrained('categorias');
            $table->foreignId('conta_id')->constrained('contas');
            $table->foreignId('formaDePagamento_id')->constrained('formas_pagamentos');
            $table->foreignId('cartao_id')->constrained('cartoes');
            $table->date('vencimento');
            $table->date('pagamento');
            $table->enum(
                'confirmPagamento',
                [
                    'sim',
                    'nao'
                ]
            );
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('despesas');
    }
};
