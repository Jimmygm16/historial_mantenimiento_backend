<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ObservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Observation::create([
            'message' => 'El ordenador no enciende',
            'creation_date' => '2021-10-14 14:31:34',
            'update_date' => '2021-10-14 14:31:34',
            'user' => '1',
            'computer' => '1',
            'category' => '1',
        ]);
        Observation::create([
            'message' => 'Ordenador con RAM defectuosa',
            'creation_date' => '2023-11-12 14:31:34',
            'update_date' => '2024-09-02 14:31:34',
            'user' => '1',
            'computer' => '1',
            'category' => '1',
        ]);
        Observation::create([
            'message' => 'El ordenador no enciende',
            'creation_date' => '2023-07-12 14:31:34',
            'update_date' => '2024-05   -14 14:31:34',
            'user' => '1',
            'computer' => '1',
            'category' => '1',
        ]);
    }
}
