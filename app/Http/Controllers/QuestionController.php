<?php

namespace App\Http\Controllers;

use App\Models\Choice;
use App\Models\Quiz;

class QuestionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Show the quiz question.
     *
     * @return void
     */
    public function show($quizId)
    {

        //il faut récupérer le nombres de questions compris dans le quiz. A chaque submit, il faut ajouter +1 pour le numéro de la question. Ex: si la question est résolue, au submit, la question courrante est stocké en session et je lui ajoute +1.

        $quiz = Quiz::with('questions')->findOrFail($quizId);

        $questions = $quiz->questions;
        // dd($quiz->questions);

        $choices = Choice::where('question_identifier');

        // foreach($questions as $question){

        //     dump($question);
        //     dump('ok');
        //     dump($question->question_identifier);
        //     dump('ok');
            
         
        // }

        // dd('ok');

        return view('questions.show', [
            'quiz' => $quiz
        ]);
    }
}
