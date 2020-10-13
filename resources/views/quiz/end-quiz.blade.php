@extends('partials.base-layout')


@section('layout-content')

<div>
    <a href="#">retour aux quiz</a>
</div>

<div class="quiz-box uk-card uk-card-default uk-card-body">
    <div class="quiz-box__introduction">
        <figure>
            <img class="quiz-box__question-illustration" src="{{asset('images/african.jpg')}}" alt="">
        </figure>

        <h1>Mythologie africaine</h1>

        <h2>Fin du quiz</h2>

        <div class="quiz-box__quiz-points-result-box">
            <span class="quiz-box__quiz-points-result">15 / 20</span>
        </div>
    </div>
    <hr class="quiz-box__divider quiz-box__divider--high">

    <div class="quiz-box__answers">
        <div class="quiz-box__questions-list">
            <div class="quiz-box__question-box">
                <span class="quiz-box__question-number">Question 1 / 20</span>
                <p class="quiz-box__question">Lorem ipsum dolor sit amet ?</p>
                <figure>
                    <img class="quiz-box__question-illustration" src="{{asset('images/african.jpg')}}" alt="">
                </figure>
                <div class="quiz-box__choices-list">

                    <div class="quiz-box__choice uk-card uk-card-default">
                        <div class="quiz-box__choice-description quiz-box__choice-description--right-choice">
                            <div class="quiz-box__choice-letter-box">
                                A
                            </div>
                            <div class="quiz-box__choice-answer-box">
                                <p class="quiz-box__choice-answer">réponse 1</p>
                            </div>
                        </div>
                    </div>

                    <div class="quiz-box__choice uk-card uk-card-default">
                        <div class="quiz-box__choice-description">
                            <div class="quiz-box__choice-letter-box">
                                B
                            </div>
                            <div class="quiz-box__choice-answer-box">
                                <p class="quiz-box__choice-answer">réponse 2</p>
                            </div>
                        </div>
                    </div>

                    <div class="quiz-box__choice uk-card uk-card-default">
                        <div class="quiz-box__choice-description">
                            <div class="quiz-box__choice-letter-box">
                                C
                            </div>
                            <div class="quiz-box__choice-answer-box">
                                <p class="quiz-box__choice-answer">réponse 3</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="quiz-box__divider">
            <div class="quiz-box__question-box">
                <span class="quiz-box__question-number">Question 2 / 20</span>
                <p class="quiz-box__question">Lorem ipsum dolor sit amet ?</p>
                <figure>
                    <img class="quiz-box__question-illustration" src="{{asset('images/african.jpg')}}" alt="">
                </figure>
                <div class="quiz-box__choices-list">
                    <div class="quiz-box__choice uk-card uk-card-default">
                        <div class="quiz-box__choice-description">
                            <div class="quiz-box__choice-letter-box">
                                A
                            </div>
                            <div class="quiz-box__choice-answer-box">
                                <p class="quiz-box__choice-answer">réponse 1</p>
                            </div>
                        </div>
                    </div>

                    <div class="quiz-box__choice uk-card uk-card-default">

                        <div class="quiz-box__choice-description quiz-box__choice-description--wrong-choice">
                            <div class="quiz-box__choice-letter-box">
                                B
                            </div>
                            <div class="quiz-box__choice-answer-box">
                                <p class="quiz-box__choice-answer">réponse 2</p>
                            </div>
                        </div>
                    </div>

                    <div class="quiz-box__choice uk-card uk-card-default">
                        <div class="quiz-box__choice-description quiz-box__choice-description--right-choice">
                            <div class="quiz-box__choice-letter-box">
                                C
                            </div>
                            <div class="quiz-box__choice-answer-box">
                                <p class="quiz-box__choice-answer">réponse 3</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="quiz-box__divider">
            <div class="quiz-box__question-box">
                <span class="quiz-box__question-number">Question 3 / 20</span>
                <p class="quiz-box__question">Lorem ipsum dolor sit amet ?</p>
                <figure>
                    <img class="quiz-box__question-illustration" src="{{asset('images/african.jpg')}}" alt="">
                </figure>
                <div class="quiz-box__choices-list">
                    <div class="quiz-box__choice uk-card uk-card-default">
                        <div class="quiz-box__choice-description">
                            <div class="quiz-box__choice-letter-box">
                                A
                            </div>
                            <div class="quiz-box__choice-answer-box">
                                <p class="quiz-box__choice-answer">réponse 1</p>
                            </div>
                        </div>
                    </div>

                    <div class="quiz-box__choice uk-card uk-card-default">

                        <div class="quiz-box__choice-description">
                            <div class="quiz-box__choice-letter-box">
                                B
                            </div>
                            <div class="quiz-box__choice-answer-box">
                                <p class="quiz-box__choice-answer">réponse 2</p>
                            </div>
                        </div>
                    </div>

                    <div class="quiz-box__choice uk-card uk-card-default">
                        <div class="quiz-box__choice-description">
                            <div class="quiz-box__choice-letter-box">
                                C
                            </div>
                            <div class="quiz-box__choice-answer-box">
                                <p class="quiz-box__choice-answer">réponse 3</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="quiz-box__divider">
            <div class="quiz-box__question-box">
                <span class="quiz-box__question-number">Question 4 / 20</span>
                <p class="quiz-box__question">Lorem ipsum dolor sit amet ?</p>
                <figure>
                    <img class="quiz-box__question-illustration" src="{{asset('images/african.jpg')}}" alt="">
                </figure>
                <div class="quiz-box__choices-list">
                    <div class="quiz-box__choice uk-card uk-card-default">
                        <div class="quiz-box__choice-description">
                            <div class="quiz-box__choice-letter-box">
                                A
                            </div>
                            <div class="quiz-box__choice-answer-box">
                                <p class="quiz-box__choice-answer">réponse 1</p>
                            </div>
                        </div>
                    </div>

                    <div class="quiz-box__choice uk-card uk-card-default">
                        <div class="quiz-box__choice-description">
                            <div class="quiz-box__choice-letter-box">
                                B
                            </div>
                            <div class="quiz-box__choice-answer-box">
                                <p class="quiz-box__choice-answer">réponse 2</p>
                            </div>
                        </div>
                    </div>

                    <div class="quiz-box__choice uk-card uk-card-default">
                        <div class="quiz-box__choice-description">
                            <div class="quiz-box__choice-letter-box">
                                C
                            </div>
                            <div class="quiz-box__choice-answer-box">
                                <p class="quiz-box__choice-answer">réponse 3</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection