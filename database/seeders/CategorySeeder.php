<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            ['name' => 'Soul'],
            ['name' => 'Ambient'],
            ['name' => 'Pop'],
            ['name' => 'Rap'],
            ['name' => 'Funk'],
            ['name' => 'Rock'],
            ['name' => 'Reggae / Dub'],
            ['name' => 'Techno'],
            ['name' => 'Electro']
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
