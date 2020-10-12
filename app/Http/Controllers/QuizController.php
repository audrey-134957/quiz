<?php

namespace App\Http\Controllers;

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
        return view('quiz.index');
    }

    /**
     * Show the begin page
     *
     * @return void
     */
    public function startQuiz()
    {
        return view('quiz.start-quiz');
    }
}
