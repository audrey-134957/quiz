@extends('partials.base-layout')


@section('layout-content')

<div>
    <a href="{{route('home.index')}}">retour aux quiz</a>
</div>

<div class="quiz-box uk-card uk-card-default uk-card-body">
    <div class="quiz-box__introduction">
        <figure>
            <img class="quiz-box__question-illustration" src="{{asset('images/boxes/'.$quiz->illustration)}}" alt="">
        </figure>

        <h1>Mythologie africaine</h1>

        <h2>Fin du quiz</h2>

        <div class="quiz-box__quiz-points-result-box">
            <span class="quiz-box__quiz-points-result">{{$playerScore .' / '. $quiz->questions->count()}}</span>
        </div>
    </div>
    <a class="quiz-box__back-to-quiz-list uk-button" href="{{route('home.index')}}">Retour aux quiz</a>
</div>

@endsection