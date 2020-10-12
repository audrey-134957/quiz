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

        <h2>Fin du quiz</h2>

        <div class="quiz-box__answers">
            
        </div>
    </div>
</div>

@endsection