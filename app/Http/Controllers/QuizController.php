<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Quiz;

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
    public function endQuiz()
    {
        return view('quiz.end-quiz');
    }
}
