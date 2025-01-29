<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear productos
        Product::factory()->count(50)->create(); // Crea 50 productos con categorías relacionadas
    }
}
