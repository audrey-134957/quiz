<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Histoire',
            'en_name' => 'history',
            'slug' => 'histoire'
        ]);

        DB::table('categories')->insert([
            'name' => 'Géographie',
            'en_name' => 'geography',
            'slug' => 'geography'
        ]);

        DB::table('categories')->insert([
            'name' => 'Politique',
            'en_name' => 'politic',
            'slug' => 'politique'
        ]);

        DB::table('categories')->insert([
            'name' => 'Animaux',
            'en_name' => 'wild',
            'slug' => 'animaux'
        ]);

        DB::table('categories')->insert([
            'name' => 'Sport',
            'en_name' => 'sport',
            'slug' => 'sport'
        ]);
    }
}
