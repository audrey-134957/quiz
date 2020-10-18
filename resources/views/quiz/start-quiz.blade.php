@extends('partials.base-layout')


@section('layout-content')

<div>
    <a href="{{route('home.index')}}">retour aux quiz</a>
</div>

<div class="quiz-box uk-card uk-card-default uk-card-body">
    <figure>
        <img class="quiz-box__question-illustration" src="{{asset('images/boxes/'.$quiz->illustration)}}" alt="">
    </figure>

    <div class="quiz-box__introduction">
        <h1>{{$quiz->title}}</h1>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

        <a class="quiz-box__link" href="{{route('quiz.show', ['quizId' => $quiz->id, 'slug' => $quiz->slug])}}">Commencer le test</a>
    </div>
</div>

@endsection