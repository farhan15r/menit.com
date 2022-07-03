<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'World',
        ]);
        Category::create([
            'name' => 'Technology',
        ]);
        Category::create([
            'name' => 'Design',
        ]);
        Category::create([
            'name' => 'Culture',
        ]);
        Category::create([
            'name' => 'Business',
        ]);
        Category::create([
            'name' => 'Politics',
        ]);
        Category::create([
            'name' => 'Opinion',
        ]);

        User::factory(5)->create();
        Post::factory(20)->create();
    }
}
