<?php

namespace App\Http\Controllers;

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
    public function show(){
        return view('questions.show');
    }

}
