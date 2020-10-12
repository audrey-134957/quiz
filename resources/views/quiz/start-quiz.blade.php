@extends('partials.base-layout')


@section('layout-content')

<div>
    <a href="#">retour aux quiz</a>
</div>

<div class="quiz-box uk-card uk-card-default uk-card-body">
    <figure>
        <img class="quiz-box__question-illustration" src="{{asset('images/african.jpg')}}" alt="">
    </figure>

    <div class="quiz-box__introduction">
        <h1>Mythologie africaine</h1>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

        <a class="quiz-box__link" href="{{route('questions.show', ['quizId' => 1, 'slug' => 'mythologie-africaine', 'questionId' => 1])}}">Commencer le test</a>
    </div>
</div>

@endsection