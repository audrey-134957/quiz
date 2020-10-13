<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
            'question' => 'Quelle est la déesse de la richesse?',
            'illustration' => '',
            'quiz_id' => 1
        ]);

        DB::table('questions')->insert([
            'question' => 'Qui est Mami Wata?',
            'illustration' => '',
            'quiz_id' => 1
        ]);


        DB::table('questions')->insert([
            'question' => 'Qui est le dieu des éclairs et du tonnerre?',
            'illustration' => '',
            'quiz_id' => 1
        ]);


        DB::table('questions')->insert([
            'question' => "L'ange de la mort?",
            'illustration' => '',
            'quiz_id' => 1
        ]);

        DB::table('questions')->insert([
            'question' => 'Quelle déesse est la compagne de Damballah-Wedo ?',
            'illustration' => '',
            'quiz_id' => 1
        ]);

        DB::table('questions')->insert([
            'question' => 'Quand auront lieu les prochaines élections précidentielles?',
            'illustration' => '',
            'quiz_id' => 2
        ]);


        DB::table('questions')->insert([
            'question' => "Qui sont élus lors des élections européennes?",
            'illustration' => '',
            'quiz_id' => 2
        ]);

        DB::table('questions')->insert([
            'question' => "Combien d'eurodéputés français seront élus ?",
            'illustration' => '',
            'quiz_id' => 2
        ]);

        DB::table('questions')->insert([
            'question' => 'Pour combien de temps sont élus les députés européens?',
            'illustration' => '',
            'quiz_id' => 2
        ]);

        DB::table('questions')->insert([
            'question' => 'Quelle ville est le siège officiel du Parlement européen ?',
            'illustration' => '',
            'quiz_id' => 2
        ]);

        DB::table('questions')->insert([
            'question' => 'Quelle est la capital du Portugal?',
            'illustration' => '',
            'quiz_id' => 3
        ]);

        DB::table('questions')->insert([
            'question' => 'Quelle est la capital de France?',
            'illustration' => '',
            'quiz_id' => 3
        ]);


        DB::table('questions')->insert([
            'question' => "Quelle est la capital de l'Espagne?",
            'illustration' => '',
            'quiz_id' => 3
        ]);

        DB::table('questions')->insert([
            'question' => "Quelle est la capital de l'Italie ?",
            'illustration' => '',
            'quiz_id' => 3
        ]);

        DB::table('questions')->insert([
            'question' => 'Quelle est la capital du Canada ?',
            'illustration' => '',
            'quiz_id' => 3
        ]);

        DB::table('questions')->insert([
            'question' => "Le corps d'un insecte est divisé en trois parties qui sont:",
            'illustration' => '',
            'quiz_id' => 4
        ]);

        DB::table('questions')->insert([
            'question' => 'Quand la chenille se transforme en papillon, elle reste pendant quelque temps dans :',
            'illustration' => '',
            'quiz_id' => 4
        ]);

        DB::table('questions')->insert([
            'question' => 'Que se passe-t-il quand une abeille pique ?',
            'illustration' => '',
            'quiz_id' => 4
        ]);

        DB::table('questions')->insert([
            'question' => 'Combien de temps une mouche vit-elle ?',
            'illustration' => '',
            'quiz_id' => 4
        ]);

        DB::table('questions')->insert([
            'question' => 'Quel insecte fait partie de la famille des coléoptères ?',
            'illustration' => '',
            'quiz_id' => 4
        ]);

        DB::table('questions')->insert([
            'question' => 'Qui conserve son titre poids lourd au judo en 2000?',
            'illustration' => '',
            'quiz_id' => 5
        ]);

        DB::table('questions')->insert([
            'question' => "Dans quel stade de Rio a lieu la cérémonie d'ouverture en 2016?",
            'illustration' => '',
            'quiz_id' => 5
        ]);

        DB::table('questions')->insert([
            'question' => 'Où se dérouleront les JO de 2024 ?',
            'illustration' => '',
            'quiz_id' => 5
        ]);

        DB::table('questions')->insert([
            'question' => "1936 : Pourquoi James Owens n'est-il pas reçu à la maison blanche avec les autres athlètes alors qu'il a remporté 4 médailles d'or ?",
            'illustration' => '',
            'quiz_id' => 5
        ]);

        DB::table('questions')->insert([
            'question' => 'Qui créa les Jeux paralympiques en 1960?',
            'illustration' => '',
            'quiz_id' => 5
        ]);
    }
}
