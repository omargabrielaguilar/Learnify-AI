<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // BIGINT UNSIGNED AUTO_INCREMENT
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->decimal('price', 10, 2);
            $table->integer('stock')->default(0);
            $table->unsignedBigInteger('category_id'); // Asegura que category_id es UNSIGNED
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade'); // Relación correcta
            $table->boolean('status')->default(true);
            $table->timestamps(); // Crea `created_at` y `updated_at`
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
