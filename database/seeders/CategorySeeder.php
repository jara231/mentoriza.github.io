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
            'name' => 'Salud'
        ]);

        Category::create([
            'name' => 'Enfermeria'
        ]);

        Category::create([
            'name' => 'Medicina'
        ]);

        Category::create([
            'name' => 'Industrial'
        ]);

        Category::create([
            'name' => 'Psicología'
        ]);
    }
}
