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
        <div class="quiz-box__question-box">
            <span class="quiz-box__question-number">Question 1 / 20</span>
            <p class="quiz-box__question">Lorem ipsum dolor sit amet ?</p>
            <figure>
                <img class="quiz-box__question-illustration" src="{{asset('images/african.jpg')}}" alt="">
            </figure>
            <div class="quiz-box__choices-list">
                <form action="" method="post">

                    <label class="quiz-box__choice uk-card uk-card-default">
                        <input class="quiz-box__radio" type="radio" name="radio" value="1">
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
                        <input class="quiz-box__radio" type="radio" name="radio" value="2">
                        <div class="quiz-box__choice-description">
                            <div class="quiz-box__choice-letter-box">
                                B
                            </div>
                            <div class="quiz-box__choice-answer-box">
                                <p class="quiz-box__choice-answer">réponse 2</p>
                            </div>
                        </div>
                    </label>

                    <label class="quiz-box__choice uk-card uk-card-default">
                        <input class="quiz-box__radio" type="radio" name="radio" value="3">
                        <div class="quiz-box__choice-description">
                            <div class="quiz-box__choice-letter-box">
                                C
                            </div>
                            <div class="quiz-box__choice-answer-box">
                                <p class="quiz-box__choice-answer">réponse 3</p>
                            </div>
                        </div>
                    </label>
                </form>
            </div>
        </div>
        <hr class="quiz-box__divider">
        <div class="quiz-box__question-box">
            <span class="quiz-box__question-number">Question 1 / 20</span>
            <p class="quiz-box__question">Lorem ipsum dolor sit amet ?</p>
            <figure>
                <img class="quiz-box__question-illustration" src="{{asset('images/african.jpg')}}" alt="">
            </figure>
            <div class="quiz-box__choices-list">
                <form action="" method="post">

                    <label class="quiz-box__choice uk-card uk-card-default">
                        <input class="quiz-box__radio" type="radio" name="radio" value="1">
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
                        <input class="quiz-box__radio" type="radio" name="radio" value="2">
                        <div class="quiz-box__choice-description">
                            <div class="quiz-box__choice-letter-box">
                                B
                            </div>
                            <div class="quiz-box__choice-answer-box">
                                <p class="quiz-box__choice-answer">réponse 2</p>
                            </div>
                        </div>
                    </label>

                    <label class="quiz-box__choice uk-card uk-card-default">
                        <input class="quiz-box__radio" type="radio" name="radio" value="3">
                        <div class="quiz-box__choice-description">
                            <div class="quiz-box__choice-letter-box">
                                C
                            </div>
                            <div class="quiz-box__choice-answer-box">
                                <p class="quiz-box__choice-answer">réponse 3</p>
                            </div>
                        </div>
                    </label>
                </form>
            </div>
        </div>
    </div>

</div>

@endsection