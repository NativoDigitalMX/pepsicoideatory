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
            'name' => 'Web 3.0'
        ]);
        Category::create([
            'name' => 'Commerce'
        ]);
        Category::create([
            'name' => 'Creativity'
        ]);
        Category::create([
            'name' => 'Community'
        ]);
        Category::create([
            'name' => 'Responsabilidad social'
        ]);
        Category::create([
            'name' => 'IA'
        ]);
        Category::create([
            'name' => 'Content'
        ]);
        Category::create([
            'name' => 'Ads'
        ]);
    }
}
