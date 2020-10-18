<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Choice;
use App\Models\Quiz;
use Laravel\Lumen\Http\Request;

class QuizController extends Controller
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
     * Show the quizes
     *
     * @return void
     */
    public function index()
    {
        $categories = Category::all();

        $quizes = Quiz::all();

        return view('quiz.index', [
            'categories' => $categories,
            'quizes' => $quizes
        ]);
    }

    /**
     * Show the quiz introduction page
     *
     * @return void
     */
    public function startQuiz($quizId)
    {

        $quiz = Quiz::findOrFail($quizId);

        // dd($quiz);

        return view('quiz.start-quiz', [
            'quiz' => $quiz
        ]);
    }

    /**
     * Show the quiz result page
     *
     * @return void
     */
    public function endQuiz(Request $request, $quizId, $slug)
    {

        $quiz = Quiz::findOrFail($quizId);

        $errorsBag = [];

        // $this->validate($request, [
        //     'question_1_choice' => 'required',
        //     'question_2_choice' => 'required',
        //     'question_3_choice' => 'required',
        //     'question_4_choice' => 'required',
        //     'question_5_choice' => 'required',
        // ]);



        // je récupère les identifiants des choix sélectionnés par l'utilisateur
        $choicesIds = [
            $_POST['question_1_choice']['0'],
            $_POST['question_2_choice']['0'],
            $_POST['question_3_choice']['0'],
            $_POST['question_4_choice']['0'],
            $_POST['question_5_choice']['0'],
        ];



        // je crée un tableau dans lequels je vais stocker les model des choix
        $choices = [];

        //pour chaque choix
        foreach ($choicesIds as $choiceId) {

            if ($choiceId === NULL) {
                $errorsBag = 'Ce champs est requis';
            }
            // après avoir retrouvé le choix dans la collection, je remplis le tableau.
            $choices[] = Choice::findOrFail($choiceId);
        }

        //le score de l'utilisateur commence de 0
        $score = 0;

        //pour chaque choix
        foreach ($choices as $choice) {

            // si le choix sélectionné par l'utilisateur est la bonne réponse
            if ($choice->is_correct == 1) {
                // j'incrémente le score de 1
                $score = $score + 1;
            }
        }


        // return 'resultat = '. $score ;

        return redirect()->route('quiz.endQuiz', ['quizId' => $quiz->id, 'slug' => $quiz->slug, 'score' => $score]);
    }
}
