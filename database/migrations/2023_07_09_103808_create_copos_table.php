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
        Schema::create('copos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->char('nome','100');
            $table->text('descricao');
            $table->decimal('preco',10,2);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('copos');
    }
};
