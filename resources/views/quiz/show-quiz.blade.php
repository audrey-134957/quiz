@extends('partials.base-layout')


@section('layout-content')

<div>
    <a href="#">retour aux quiz</a>
</div>

<div class="quiz-box uk-card uk-card-default">
    <div class="quiz-box__card-header uk-card-header">
        <span class="quiz-box__questions-number">20Q</span>
        <h3 class="quiz-box__title uk-card-title">Mythologie africaine</h3>
    </div>
    <div class="quiz-box__card-body uk-card-body">
        <p>Lorem ipsum dolor sit amet ?</p>
        <figure>
            <img class="quiz-box__question-illustration" src="{{asset('images/african.jpg')}}" alt="">
        </figure>
        <div class="quiz-box__choices-list">
            <label class="quiz-box__choice uk-card uk-card-default">
                <input class="quiz-box__checkbox" type="checkbox">
                <div class="quiz-box__choice-description">
                    <div class="quiz-box__choice-letter-box">
                        A
                    </div>
                    <div class="quiz-box__choice-answer-box">
                        <p class="quiz-box__choice-answer">réponse 1</p>
                    </div>
                </div>
            </label>

            <label class="quiz-box__choice uk-card uk-card-default">
                <input class="quiz-box__checkbox" type="checkbox">
                <div class="quiz-box__choice-description">
                    <div class="quiz-box__choice-letter-box">
                        A
                    </div>
                    <div class="quiz-box__choice-answer-box">
                        <p class="quiz-box__choice-answer">réponse 2</p>
                    </div>
                </div>
            </label>
            <label class="quiz-box__choice uk-card uk-card-default">
                <input class="quiz-box__checkbox" type="checkbox">
                <div class="quiz-box__choice-description">
                    <div class="quiz-box__choice-letter-box">
                        A
                    </div>
                    <div class="quiz-box__choice-answer-box">
                        <p class="quiz-box__choice-answer">réponse 3</p>
                    </div>
                </div>
            </label>
        </div>
    </div>
</div>

@endsection