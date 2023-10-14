<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Instalación de software',
        ]);
        Category::create([
            'name' => 'Mantenimiento preventivo',
        ]);
        Category::create([
            'name' => 'Mantenimiento correctivo',
        ]);
        Category::create([
            'name' => 'Cambio de hardware',
        ]);
    }
}
