<?php

namespace Database\Seeders;

use App\Models\Characteristic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CharacteristicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Characteristic::create([
            'name' => 'Únicos'
        ]);
        Characteristic::create([
            'name' => 'Indivisibles'
        ]);
        Characteristic::create([
            'name' => 'Transferibles'
        ]);
        Characteristic::create([
            'name' => 'Con capacidad de probar su escasez'
        ]);

    }
}
