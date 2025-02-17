<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = ['politik', 'kesehatan', 'teknologi', 'hiburan', 'olahraga', 'opini', 'komunitas', 'edukasi', 'feature', 'lagu', 'film', 'militer'];

        foreach ($categories as $category) {
            Category::create(['name' => $category]);
        }
    }
}
