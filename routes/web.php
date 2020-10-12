<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/


/* ACCUEIL */
$router->get('/', ['uses' => 'QuizController@index', 'as' => 'home.index']);

/* CONNEXION */
$router->get('/connexion', ['uses' => 'LoginController@create', 'as' => 'login.create']);

/* QUIZ */
/* COMMENCER */
$router->get('/quiz-{quizId}/{slug}/commencer-le-test', ['uses' => 'QuizController@startQuiz', 'as' => 'quiz.startQuiz']);

/* QUESTION DU QUIZ */
$router->get('/quiz-{quizId}/{slug}/question-{questionId}', ['uses' => 'QuestionController@show', 'as' => 'questions.show']);