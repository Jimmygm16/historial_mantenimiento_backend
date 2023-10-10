<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Computer;

class ComputerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Computer::unguard();
        Computer::create([
            'name' => 's1e1',
            'brand' => 'HP',
            'ram' => 8,
            'cpu' => 'Intel Core i5',
            'owner' => 1
        ]);
        Computer::create([
            'name' => 's1e2',
            'brand' => 'Lenovo',
            'ram' => 16,
            'cpu' => 'Ryzen 4 4000',
            'owner' => 1
        ]);
        Computer::create([
            'name' => 's1e3',
            'brand' => 'Dell',
            'ram' => 4,
            'cpu' => 'Intel Core i3',
            'owner' => 1
        ]);
        Computer::reguard();
    }
}
