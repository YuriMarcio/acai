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
        Schema::create('user_deliveries', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->char('nome',100);
            $table->char('telefone','20');
            $table->char('rua','100');
            $table->char('bairro','60');
            $table->char('numero');
            $table->char('cidade','70');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_deliveries');
    }
};
