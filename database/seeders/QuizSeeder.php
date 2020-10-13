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
            'is_active' => 1
        ]);

        DB::table('quizes')->insert([
            'title' => 'Les élections présidentielles 2019',
            'slug' => 'les-elections-presidentielles-2019',
            'categorie_id' => 3,
            'is_active' => 1
        ]);

        DB::table('quizes')->insert([
            'title' => 'Géographie',
            'slug' => 'geographie',
            'categorie_id' => 2,
            'is_active' => 1
        ]);

        DB::table('quizes')->insert([
            'title' => 'Les inscctes',
            'slug' => 'les-insectes',
            'categorie_id' => 4,
            'is_active' => 1
        ]);

        DB::table('quizes')->insert([
            'title' => 'Les jeux olympiques',
            'slug' => 'les-jeux-olympiques',
            'categorie_id' => 5,
            'is_active' => 1
        ]);
    }
}
