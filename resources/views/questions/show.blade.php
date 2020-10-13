@extends('partials.base-layout')


@section('layout-content')

<div>
    <a href="#">retour aux quiz</a>
</div>

<div class="quiz-box uk-card uk-card-default">
    <div class="quiz-box__card-header uk-card-header">
        <span class="quiz-box__questions-number">20Q</span>
        <h3 class="quiz-box__title uk-card-title">{{$quiz->title}}</h3>
    </div>
    <div class="quiz-box__card-body uk-card-body">
        <form action="" method="post">
            <div class="quiz-box__questions-list">
                <div class="quiz-box__question-box">
                    <span class="quiz-box__question-number">Question 1 / 20</span>
                    <p class="quiz-box__question">Lorem ipsum dolor sit amet ?</p>
                    <figure>
                        <img class="quiz-box__question-illustration" src="{{asset('images/african.jpg')}}" alt="">
                    </figure>
                    <div class="quiz-box__choices-list">

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
                        = </div>
                </div>
                <hr class="quiz-box__divider">
                <div class="quiz-box__question-box">
                    <span class="quiz-box__question-number">Question 4 / 20</span>
                    <p class="quiz-box__question">Lorem ipsum dolor sit amet ?</p>
                    <figure>
                        <img class="quiz-box__question-illustration" src="{{asset('images/african.jpg')}}" alt="">
                    </figure>
                    <div class="quiz-box__choices-list">
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
                    </div>
                </div>
            </div>
            <button class="quiz-box__submit-button uk-button" type="submit">Résultat du quiz</button>
        </form>
    </div>

</div>

@endsection

@section('js')
<script>
    // self executing function here
    (function() {

        var quiz = {
            scrollToQuestion: function() {
                var choice = $('input[type="radio"]');


                choice.on('click', function() {

                    // console.log('coucou');

                    if (choice.is(':checked')) {
                        // console.log('ok');
                        $('html,body').animate({
                            scrollTop: $(this).next().offset().top + 200
                        }, 'slow');
                    };
                })
            }
        }
        quiz.scrollToQuestion();
    })();
</script>

@endsection