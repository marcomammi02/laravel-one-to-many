<?php

use App\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    // /**
    //  * Run the database seeds.
    //  *
    //  * @return void
    //  */
    // public function run()
    // {
    //     $categories = [
    //         'Attualità',
    //         'Scuola',
    //         'Politica',
    //         'Estero',
    //         'Italia',
    //         'Cucina',
    //         'Informatica',
    //         'Gossip',
    //     ];

    //     foreach ($categories as $category) {
    //         Category::create([
    //             'slug'        => Str::slug($category), // Attualità --> attualit
    //             'name'        => $category,
    //             'description' => $category,
    //         ]);
    //     }
    // }
}
