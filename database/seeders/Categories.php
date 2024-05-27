<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Category;

class Categories extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create(['nome' => 'CAMISETAS']);
        Category::create(['nome' => 'REGATAS']);
        Category::create(['nome' => 'MOLETONS']);
        Category::create(['nome' => 'GEEK']);
        Category::create(['nome' => 'NERD']);
    }
}
