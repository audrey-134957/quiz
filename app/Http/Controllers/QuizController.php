<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Choice;
use App\Models\Player;
use App\Models\Quiz;
use App\Models\Score;
use App\Models\SelectedChoice;

use Illuminate\Http\Request;


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

    public function show($quizId)
    {

        //il faut récupérer le nombres de questions compris dans le quiz. A chaque submit, il faut ajouter +1 pour le numéro de la question. Ex: si la question est résolue, au submit, la question courrante est stocké en session et je lui ajoute +1.

        $quiz = Quiz::with('questions')->findOrFail($quizId);

        $questions = $quiz->questions;
        // dd($quiz->questions);

        $choices = Choice::where('question_identifier');

        return view('quiz.show', [
            'quiz' => $quiz
        ]);
    }

    /**
     * Show the quiz result page
     *
     * @return void
     */
    public function showPost(Request $request, $quizId, $slug)
    {



        $quiz = Quiz::findOrFail($quizId);

        $errorsBag = [];

        $choicesIds = [
            $request->question_1_choice,
            $request->question_2_choice,
            $request->question_3_choice,
            $request->question_4_choice,
            $request->question_5_choice,
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


        // $playerIp = $_SERVER['REMOTE_ADDR'];

        $playerIp = $request->ip();
        
        $player = new Player();
        $player->ip = $playerIp;
        $player->save();

        //pour chaque choix
        foreach ($choices as $choice) {


            $selectedChoice = new SelectedChoice();
            $selectedChoice->player_id = $player->id;
            $selectedChoice->choice_id = $choice->id;
            $selectedChoice->question_identifier = $choice->question_identifier;
            $selectedChoice->quiz_id = $choice->quiz_id;
            $selectedChoice->save();

            // si le choix sélectionné par l'utilisateur est la bonne réponse
            if ($choice->is_correct == 1) {
                // j'incrémente le score de 1
                $score = $score + 1;
            }
        }

        $playerScore = new Score();
        $playerScore->score = $score;
        $playerScore->player_id = $player->id;
        $playerScore->save();

        return redirect()->route('quiz.endQuiz', ['quizId' => $quiz->id, 'slug' => $quiz->slug, 'player' => $player]);
    }


    public function endQuiz($quizId, $slug, $player)
    {

        $player = Player::findOrFail($player);


        $playerScore = $player->scores->last();

        $playerScore = $playerScore->score;

        $quiz = Quiz::findOrFail($quizId);

        $slug = $quiz->slug;


        // $selectedChoices = $player->selected_choices;

        // $selectedChoices = [];

        // foreach($selectedChoices as $selectedChoice){

            
        //     dd($retrievedSelectedChoice);

        //     $selectedChoices[] =  $retrievedSelectedChoice;
        // }

        // dd($selectedChoices);


        return view('quiz.end-quiz', [
            'quiz' => $quiz,
            'slug' => $slug,
            'player' => $player,
            'playerScore' => $playerScore
        ]);
    }
}
