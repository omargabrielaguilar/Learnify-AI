<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id()->unsigned(); // Asegura que `id` es UNSIGNED
            $table->string('name');
            $table->string('slug')->unique();
            $table->foreignId('parent_id')->nullable()->constrained('categories'); // Permite jerarquías
            $table->boolean('status')->default(true);
            $table->timestamps(); // Crea `created_at` y `updated_at`
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
