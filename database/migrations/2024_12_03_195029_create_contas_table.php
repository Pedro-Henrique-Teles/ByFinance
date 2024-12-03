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
        Schema::create('contas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('nome', 15);
            $table->enum(
                'tipo',
                [
                    'Corrente',
                    'Poupança',
                    'Salário',
                    'Conjunta',
                    'Universitaria',
                    'Empresarial',
                    'Outro'
                ]
            );
            $table->decimal('saldoInicial', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contas');
    }
};
