<?php

namespace Database\Seeders;

use App\Models\Observation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class ObservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Observation::unguard();
        Observation::create([
            'message' => 'El ordenador no enciende',
            'user' => 1,
            'computer' => 1,
            'category' => 1,
        ]);
        Observation::create([
            'message' => 'Ordenador con RAM defectuosa',
            'user' => 1,
            'computer' => 1,
            'category' => 1,
        ]);
        Observation::reguard();
    }
}
