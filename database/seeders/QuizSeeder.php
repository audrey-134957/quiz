<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('quizes')->insert([
            'title' => 'Mythologie africaine',
            'slug' => 'mythologie-africaine',
            'categorie_id' => 1,
            'illustration' => 'african.jpg',
            'is_active' => 1
        ]);

        DB::table('quizes')->insert([
            'title' => 'Les élections présidentielles',
            'slug' => 'les-elections-presidentielles',
            'categorie_id' => 3,
            'illustration' => 'politics.jpg',
            'is_active' => 1
        ]);

        DB::table('quizes')->insert([
            'title' => 'Les capitales',
            'slug' => 'les-capitales',
            'categorie_id' => 2,
            'illustration' => 'geography.jpg',
            'is_active' => 1
        ]);

        DB::table('quizes')->insert([
            'title' => 'Les insectes',
            'slug' => 'les-insectes',
            'categorie_id' => 4,
            'illustration' => 'insects.jpg',
            'is_active' => 1
        ]);

        DB::table('quizes')->insert([
            'title' => 'Les jeux olympiques',
            'slug' => 'les-jeux-olympiques',
            'categorie_id' => 5,
            'illustration' => 'olympics.jpg',
            'is_active' => 1
        ]);
    }
}
