<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Laços'
        ]);
        Category::create([
            'name' => 'Tiaras'
        ]);
        Category::create([
            'name' => 'Viseiras'
        ]);
        Category::create([
            'name' => 'Faixas'
        ]);
    }
}
