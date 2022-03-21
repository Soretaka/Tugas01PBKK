<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(10)->create();
         \App\Models\Article::factory(10)->create();
        // User::create([
        //     'name' => 'Agus Budi',
        //     'email' => 'agus.budi@its.ac.id',
        //     'password' => bcrypt('123')
        // ]);

        // User::create([
        //     'name' => 'Fitrah Arie',
        //     'email' => 'fitrah@mhs.its.ac.id',
        //     'password' => bcrypt('123')
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Analisis Algoritma',
            'slug' => 'analisis-algoritma'
        ]);

        Category::create([
            'name' => 'Catatan Harian',
            'slug' => 'catatan-harian'
        ]);

    }
}
