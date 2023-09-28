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
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string("nameProd");
            $table->string("descriProd")->nullable();
            $table->unsignedBigInteger('categoria_id');
            $table->string("supplierProd");
            $table->integer("amountProd");
            $table->decimal('unitPriceProd', 10, 2);
            $table->string('imageProd');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
