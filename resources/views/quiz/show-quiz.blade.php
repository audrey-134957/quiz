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
            <!-- <img src="/images/boxes/social-networks.jpg" alt=""> -->
            <img class="quiz-box__question-illustration" src="{{asset('images/african.jpg')}}" alt="">
        </figure>
        <div class="quiz-box__choices-list">
            <label class="quiz-box__choice">
                <input class="" type="checkbox">
                <span>réponse 1</span>
            </label>
            <label class="quiz-box__choice">
                <input class="" type="checkbox">
                <span>réponse 2</span>
            </label>
            <label class="quiz-box__choice">
                <input class="" type="checkbox">
                <span>réponse 3</span>
            </label>
            <label class="quiz-box__choice">
                <input class="" type="checkbox">
                <span>réponse 4</span>
            </label>
        </div>
    </div>
</div>

@endsection