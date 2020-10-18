<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ChoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /* QUESTION 1 / QUIZ 1 */
        DB::table('choices')->insert([
            'choice' => 'Aje',
            'quiz_id' => 1,
            'question_identifier' => 1,
            'is_correct' => 1
        ]);

        DB::table('choices')->insert([
            'choice' => 'Aja',
            'quiz_id' => 1,
            'question_identifier' => 1,
            'is_correct' => 0
        ]);

        DB::table('choices')->insert([
            'choice' => 'Amirini',
            'quiz_id' => 1,
            'question_identifier' => 1,
            'is_correct' => 0
        ]);


        /* QUESTION 2 / QUIZ 1 */
        DB::table('choices')->insert([
            'choice' => 'Déesse des eaux',
            'quiz_id' => 1,
            'question_identifier' => 2,
            'is_correct' => 1
        ]);

        DB::table('choices')->insert([
            'choice' => 'Déesse de la nature',
            'quiz_id' => 1,
            'question_identifier' => 2,
            'is_correct' => 0
        ]);

        DB::table('choices')->insert([
            'choice' => "Déesse de l'agriculture",
            'quiz_id' => 1,
            'question_identifier' => 2,
            'is_correct' => 0
        ]);


        /* QUESTION 3 / QUIZ 1 */

        DB::table('choices')->insert([
            'choice' => 'Amadioha',
            'quiz_id' => 1,
            'question_identifier' => 3,
            'is_correct' => 1
        ]);

        DB::table('choices')->insert([
            'choice' => 'Anynu',
            'quiz_id' => 1,
            'question_identifier' => 3,
            'is_correct' => 0
        ]);

        DB::table('choices')->insert([
            'choice' => 'Asthar',
            'quiz_id' => 1,
            'question_identifier' => 3,
            'is_correct' => 0
        ]);

        /* QUESTION 4 / QUIZ 1 */

        DB::table('choices')->insert([
            'choice' => 'Agé',
            'quiz_id' => 1,
            'question_identifier' => 4,
            'is_correct' => 0
        ]);

        DB::table('choices')->insert([
            'choice' => "Azra'il",
            'quiz_id' => 1,
            'question_identifier' => 4,
            'is_correct' => 1
        ]);

        DB::table('choices')->insert([
            'choice' => 'Ajok',
            'quiz_id' => 1,
            'question_identifier' => 4,
            'is_correct' => 0
        ]);

        /* QUESTION 5 / QUIZ 1 */

        DB::table('choices')->insert([
            'choice' => 'Aberawa',
            'quiz_id' => 1,
            'question_identifier' => 5,
            'is_correct' => 0
        ]);

        DB::table('choices')->insert([
            'choice' => 'Aida-Wedo',
            'quiz_id' => 1,
            'question_identifier' => 5,
            'is_correct' => 1
        ]);

        DB::table('choices')->insert([
            'choice' => 'Akwaba',
            'quiz_id' => 1,
            'question_identifier' => 5,
            'is_correct' => 0
        ]);



        /* QUESTION 1 / QUIZ 2 */
        DB::table('choices')->insert([
            'choice' => '2026',
            'quiz_id' => 2,
            'question_identifier' => 1,
            'is_correct' => 0
        ]);

        DB::table('choices')->insert([
            'choice' => '2022',
            'quiz_id' => 2,
            'question_identifier' => 1,
            'is_correct' => 1
        ]);

        DB::table('choices')->insert([
            'choice' => '2028',
            'quiz_id' => 2,
            'question_identifier' => 1,
            'is_correct' => 0
        ]);


        /* QUESTION 2 / QUIZ 2 */

        DB::table('choices')->insert([
            'choice' => 'des sénateurs',
            'quiz_id' => 2,
            'question_identifier' => 2,
            'is_correct' => 0
        ]);

        DB::table('choices')->insert([
            'choice' => 'des juges',
            'quiz_id' => 2,
            'question_identifier' =>2,
            'is_correct' => 0
        ]);

        DB::table('choices')->insert([
            'choice' => "des eurodéputés français",
            'quiz_id' => 2,
            'question_identifier' => 2,
            'is_correct' => 1
        ]);


        /* QUESTION 3 / QUIZ 2 */

        DB::table('choices')->insert([
            'choice' => '79',
            'quiz_id' => 2,
            'question_identifier' => 3,
            'is_correct' => 1
        ]);

        DB::table('choices')->insert([
            'choice' => '96',
            'quiz_id' => 2,
            'question_identifier' => 3,
            'is_correct' => 0
        ]);

        DB::table('choices')->insert([
            'choice' => '54',
            'quiz_id' => 2,
            'question_identifier' => 3,
            'is_correct' => 0
        ]);

        /* QUESTION 4 / QUIZ 2 */

        DB::table('choices')->insert([
            'choice' => '2 ans',
            'quiz_id' => 2,
            'question_identifier' => 4,
            'is_correct' => 0
        ]);

        DB::table('choices')->insert([
            'choice' => '5 ans',
            'quiz_id' => 2,
            'question_identifier' => 4,
            'is_correct' => 1

        ]);

        DB::table('choices')->insert([
            'choice' => ' 1 an',
            'quiz_id' => 2,
            'question_identifier' => 4,
            'is_correct' => 0
        ]);

        /* QUESTION 5 / QUIZ 2 */

        DB::table('choices')->insert([
            'choice' => 'Strasbourg',
            'quiz_id' => 2,
            'question_identifier' => 5,
            'is_correct' => 1
        ]);

        DB::table('choices')->insert([
            'choice' => 'Lyon',
            'quiz_id' => 2,
            'question_identifier' => 5,
            'is_correct' => 0
        ]);

        DB::table('choices')->insert([
            'choice' => 'Bordeaux',
            'quiz_id' => 2,
            'question_identifier' => 5,
            'is_correct' => 0
        ]);

        /* QUESTION 1 / QUIZ 3 */

        DB::table('choices')->insert([
            'choice' => 'Lisbonne',
            'quiz_id' => 3,
            'question_identifier' => 1,
            'is_correct' => 1
        ]);

        DB::table('choices')->insert([
            'choice' => 'Braga',
            'quiz_id' => 3,
            'question_identifier' => 1,
            'is_correct' => 0
        ]);

        DB::table('choices')->insert([
            'choice' => 'Porto',
            'quiz_id' => 3,
            'question_identifier' => 1,
            'is_correct' => 0
        ]);

        /* QUESTION 2 / QUIZ 3 */

        DB::table('choices')->insert([
            'choice' => 'Paris',
            'quiz_id' => 3,
            'question_identifier' => 2,
            'is_correct' => 1
        ]);

        DB::table('choices')->insert([
            'choice' => 'Lyon',
            'quiz_id' => 3,
            'question_identifier' => 2,
            'is_correct' => 0
        ]);

        DB::table('choices')->insert([
            'choice' => 'Rouen',
            'quiz_id' => 3,
            'question_identifier' => 2,
            'is_correct' => 0
        ]);

        /* QUESTION 3 / QUIZ 3 */

        DB::table('choices')->insert([
            'choice' => 'Madrid',
            'quiz_id' => 3,
            'question_identifier' => 3,
            'is_correct' => 1
        ]);

        DB::table('choices')->insert([
            'choice' => 'Séville',
            'quiz_id' => 3,
            'question_identifier' => 3,
            'is_correct' => 0
        ]);

        DB::table('choices')->insert([
            'choice' => 'Grenade',
            'quiz_id' => 3,
            'question_identifier' => 3,
            'is_correct' => 0
        ]);

        /* QUESTION 4 / QUIZ 3 */

        DB::table('choices')->insert([
            'choice' => 'Rome',
            'quiz_id' => 3,
            'question_identifier' => 4,
            'is_correct' => 1
        ]);

        DB::table('choices')->insert([
            'choice' => 'Venise',
            'quiz_id' => 3,
            'question_identifier' => 4,
            'is_correct' => 0
        ]);

        DB::table('choices')->insert([
            'choice' => 'Milan',
            'quiz_id' => 3,
            'question_identifier' => 4,
            'is_correct' => 0
        ]);

        /* QUESTION 5 / QUIZ 3 */

        DB::table('choices')->insert([
            'choice' => 'Ottawa',
            'quiz_id' => 3,
            'question_identifier' => 5,
            'is_correct' => 1
        ]);

        DB::table('choices')->insert([
            'choice' => 'Vancouver',
            'quiz_id' => 3,
            'question_identifier' => 5,
            'is_correct' => 0
        ]);

        DB::table('choices')->insert([
            'choice' => 'Montréal',
            'quiz_id' => 3,
            'question_identifier' => 5,
            'is_correct' => 0
        ]);


        /* QUESTION 1 / QUIZ 4 */

        DB::table('choices')->insert([
            'choice' => "L'abdomène",
            'quiz_id' => 4,
            'question_identifier' => 1,
            'is_correct' => 1
        ]);

        DB::table('choices')->insert([
            'choice' => 'Le thorax',
            'quiz_id' => 4,
            'question_identifier' => 1,
            'is_correct' => 0
        ]);

        DB::table('choices')->insert([
            'choice' => 'La tête',
            'quiz_id' => 4,
            'question_identifier' => 1,
            'is_correct' => 0
        ]);

        /* QUESTION 2 / QUIZ 4 */

        DB::table('choices')->insert([
            'choice' => "En papillon",
            'quiz_id' => 4,
            'question_identifier' => 2,
            'is_correct' => 1
        ]);

        DB::table('choices')->insert([
            'choice' => 'En coccinelle',
            'quiz_id' => 4,
            'question_identifier' => 2,
            'is_correct' => 0
        ]);

        DB::table('choices')->insert([
            'choice' => 'En scarabée',
            'quiz_id' => 4,
            'question_identifier' => 2,
            'is_correct' => 0
        ]);

        /* QUESTION 3 / QUIZ 4 */

        DB::table('choices')->insert([
            'choice' => "Elle meurt",
            'quiz_id' => 4,
            'question_identifier' => 3,
            'is_correct' => 1
        ]);

        DB::table('choices')->insert([
            'choice' => 'Son dar repousse',
            'quiz_id' => 4,
            'question_identifier' => 3,
            'is_correct' => 0
        ]);

        DB::table('choices')->insert([
            'choice' => 'Elle change de couleur',
            'quiz_id' => 4,
            'question_identifier' => 3,
            'is_correct' => 0
        ]);

        /* QUESTION 4 / QUIZ 4 */

        DB::table('choices')->insert([
            'choice' => "Environ 28 jours",
            'quiz_id' => 4,
            'question_identifier' => 4,
            'is_correct' => 1
        ]);

        DB::table('choices')->insert([
            'choice' => 'Environ 40 jours',
            'quiz_id' => 4,
            'question_identifier' => 4,
            'is_correct' => 0
        ]);

        DB::table('choices')->insert([
            'choice' => 'Environ 1 an',
            'quiz_id' => 4,
            'question_identifier' => 4,
            'is_correct' => 0
        ]);

        /* QUESTION 5 / QUIZ 4 */

        DB::table('choices')->insert([
            'choice' => "Le scaraée",
            'quiz_id' => 4,
            'question_identifier' => 5,
            'is_correct' => 1
        ]);

        DB::table('choices')->insert([
            'choice' => 'La libellule',
            'quiz_id' => 4,
            'question_identifier' => 5,
            'is_correct' => 0
        ]);

        DB::table('choices')->insert([
            'choice' => "L'araignée",
            'quiz_id' => 4,
            'question_identifier' => 5,
            'is_correct' => 0
        ]);

        /* QUESTION 1 / QUIZ 5 */

        DB::table('choices')->insert([
            'choice' => 'David Douillet',
            'quiz_id' => 5,
            'question_identifier' => 1,
            'is_correct' => 1
        ]);

        DB::table('choices')->insert([
            'choice' => 'Tedy Riner',
            'quiz_id' => 5,
            'question_identifier' => 1,
            'is_correct' => 0
        ]);

        DB::table('choices')->insert([
            'choice' => 'Shinichi Shinohara',
            'quiz_id' => 5,
            'question_identifier' => 1,
            'is_correct' => 0
        ]);

        /* QUESTION 2 / QUIZ 5 */

        DB::table('choices')->insert([
            'choice' => 'le stade de Maracanã',
            'quiz_id' => 5,
            'question_identifier' => 2,
            'is_correct' => 1
        ]);

        DB::table('choices')->insert([
            'choice' => 'le stade de Lagoa',
            'quiz_id' => 5,
            'question_identifier' => 2,
            'is_correct' => 0
        ]);

        DB::table('choices')->insert([
            'choice' => 'le Future Arena',
            'quiz_id' => 5,
            'question_identifier' => 2,
            'is_correct' => 0
        ]);

        /* QUESTION 3 / QUIZ 5 */

        DB::table('choices')->insert([
            'choice' => 'à Paris, en France',
            'quiz_id' => 5,
            'question_identifier' => 3,
            'is_correct' => 1
        ]);

        DB::table('choices')->insert([
            'choice' => 'à Tokyo, au Japon',
            'quiz_id' => 5,
            'question_identifier' => 3,
            'is_correct' => 0
        ]);

        DB::table('choices')->insert([
            'choice' => 'à Moscou, en Russie',
            'quiz_id' => 5,
            'question_identifier' => 3,
            'is_correct' => 0
        ]);


         /* QUESTION 4 / QUIZ 5 */

         DB::table('choices')->insert([
            'choice' => 'Il était noir',
            'quiz_id' => 5,
            'question_identifier' => 4,
            'is_correct' => 1
        ]);

        DB::table('choices')->insert([
            'choice' => 'Il était malade',
            'quiz_id' => 5,
            'question_identifier' => 4,
            'is_correct' => 0
        ]);

        DB::table('choices')->insert([
            'choice' => 'Il avait renoncé à son titre',
            'quiz_id' => 5,
            'question_identifier' => 4,
            'is_correct' => 0
        ]);

          /* QUESTION 5 / QUIZ 5 */

          DB::table('choices')->insert([
            'choice' => '5 cerceaux entrelacées',
            'quiz_id' => 5,
            'question_identifier' => 5,
            'is_correct' => 1
        ]);

        DB::table('choices')->insert([
            'choice' => 'Une flamme',
            'quiz_id' => 5,
            'question_identifier' => 5,
            'is_correct' => 0
        ]);

        DB::table('choices')->insert([
            'choice' => 'Une balance',
            'quiz_id' => 5,
            'question_identifier' => 5,
            'is_correct' => 0
        ]);
    }
}
