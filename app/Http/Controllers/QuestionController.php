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

        //il faut récupérer le nombres de questions compris dans le quiz. A chaque submit, il faut ajouter +1 pour le numéro de la question. Ex: si la question est résolue, au submit, la question courrante est stocké en session et je lui ajoute +1.



        return view('questions.show');
    }

}
