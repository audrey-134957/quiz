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

        /* QUESTIONS QUIZ 1 */
        DB::table('questions')->insert([
            'question_identifier' => 1,
            'question' => 'Quelle est la déesse de la richesse?',
            'illustration' => '',
            'quiz_id' => 1
        ]);

        DB::table('questions')->insert([
            'question_identifier' => 2,
            'question' => 'Qui est Mami Wata?',
            'illustration' => '',
            'quiz_id' => 1
        ]);


        DB::table('questions')->insert([
            'question_identifier' => 3,
            'question' => 'Qui est le dieu des éclairs et du tonnerre?',
            'illustration' => '',
            'quiz_id' => 1
        ]);

        DB::table('questions')->insert([
            'question_identifier' => 4,
            'question' => "L'ange de la mort?",
            'illustration' => '',
            'quiz_id' => 1
        ]);

        DB::table('questions')->insert([
            'question_identifier' => 5,
            'question' => 'Quelle déesse est la compagne de Damballah-Wedo ?',
            'illustration' => '',
            'quiz_id' => 1
        ]);

        /* QUESTIONS QUIZ 2 */
        DB::table('questions')->insert([
            'question_identifier' => 1,
            'question' => 'Quand auront lieu les prochaines élections précidentielles?',
            'illustration' => '',
            'quiz_id' => 2
        ]);


        DB::table('questions')->insert([
            'question_identifier' => 2,
            'question' => "Qui sont élus lors des élections européennes?",
            'illustration' => '',
            'quiz_id' => 2
        ]);

        DB::table('questions')->insert([
            'question_identifier' => 3,
            'question' => "Combien d'eurodéputés français seront élus ?",
            'illustration' => '',
            'quiz_id' => 2
        ]);

        DB::table('questions')->insert([
            'question_identifier' => 4,
            'question' => 'Pour combien de temps sont élus les députés européens?',
            'illustration' => '',
            'quiz_id' => 2
        ]);

        DB::table('questions')->insert([
            'question_identifier' => 5,
            'question' => 'Quelle ville est le siège officiel du Parlement européen ?',
            'illustration' => '',
            'quiz_id' => 2
        ]);


        /* QUESTIONS QUIZ 3 */
        DB::table('questions')->insert([
            'question_identifier' => 1,
            'question' => 'Quelle est la capital du Portugal?',
            'illustration' => '',
            'quiz_id' => 3
        ]);

        DB::table('questions')->insert([
            'question_identifier' => 2,
            'question' => 'Quelle est la capital de la France?',
            'illustration' => '',
            'quiz_id' => 3
        ]);


        DB::table('questions')->insert([
            'question_identifier' => 3,
            'question' => "Quelle est la capital de l'Espagne?",
            'illustration' => '',
            'quiz_id' => 3
        ]);

        DB::table('questions')->insert([
            'question_identifier' => 4,
            'question' => "Quelle est la capital de l'Italie ?",
            'illustration' => '',
            'quiz_id' => 3
        ]);

        DB::table('questions')->insert([
            'question_identifier' => 5,
            'question' => 'Quelle est la capital du Canada ?',
            'illustration' => '',
            'quiz_id' => 3
        ]);

        /* QUESTION 4 */
        DB::table('questions')->insert([
            'question_identifier' => 1,
            'question' => "Quelle est la troisième partie de l'insecte?",
            'illustration' => '',
            'quiz_id' => 4
        ]);

        DB::table('questions')->insert([
            'question_identifier' => 2,
            'question' => 'En quoi se transforme la chenille?',
            'illustration' => '',
            'quiz_id' => 4
        ]);

        DB::table('questions')->insert([
            'question_identifier' => 3,
            'question' => "Que se passe-t-il pour une abeille lorsqu'elle pique ?",
            'illustration' => '',
            'quiz_id' => 4
        ]);

        DB::table('questions')->insert([
            'question_identifier' => 4,
            'question' => 'Combien de temps une mouche vit-elle ?',
            'illustration' => '',
            'quiz_id' => 4
        ]);

        DB::table('questions')->insert([
            'question_identifier' => 5,
            'question' => 'Quel insecte fait partie de la famille des coléoptères ?',
            'illustration' => '',
            'quiz_id' => 4
        ]);

        /* QUESTION 5 */
        DB::table('questions')->insert([
            'question_identifier' => 1,
            'question' => 'Qui conserve son titre poids lourd au judo en 2000?',
            'illustration' => '',
            'quiz_id' => 5
        ]);

        DB::table('questions')->insert([
            'question_identifier' => 2,
            'question' => "Dans quel stade de Rio a lieu la cérémonie d'ouverture en 2016?",
            'illustration' => '',
            'quiz_id' => 5
        ]);

        DB::table('questions')->insert([
            'question_identifier' => 3,
            'question' => 'Où se dérouleront les JO de 2024 ?',
            'illustration' => '',
            'quiz_id' => 5
        ]);

        DB::table('questions')->insert([
            'question_identifier' => 4,
            'question' => "1936 : Pourquoi James Owens n'est-il pas reçu à la maison blanche avec les autres athlètes alors qu'il a remporté 4 médailles d'or ?",
            'illustration' => '',
            'quiz_id' => 5
        ]);

        DB::table('questions')->insert([
            'question_identifier' => 5,
            'question' => 'Quelles est le symbole des JO?',
            'illustration' => '',
            'quiz_id' => 5
        ]);
    }
}
