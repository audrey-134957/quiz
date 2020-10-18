@extends('partials.base-layout')


@section('layout-content')

<div>
    <a href="{{route('home.index')}}">retour aux quiz</a>
</div>

<div class="quiz-box uk-card uk-card-default">
    <div class="quiz-box__card-header uk-card-header">
        <span class="quiz-box__questions-number">{{$quiz->questions->count()}} Q</span>
        <h3 class="quiz-box__title uk-card-title">{{$quiz->title}}</h3>
    </div>
    <div class="quiz-box__card-body uk-card-body">
        <form action="{{route('quiz.endQuiz', ['quizId' => $quiz->id, 'slug' => $quiz->slug])}}" method="POST">
            <input type="hidden" name="_token" value="{{request()->segment(3)}}">
            <div class="quiz-box__questions-list">
                @foreach($quiz->questions as $key => $question)

                <div class="quiz-box__question-box">
                    <span class="quiz-box__question-number">Question {{$question->question_identifier}} / 20</span>
                    <p class="quiz-box__question">{{$question->question}}</p>
                    @if(!empty($question->illustration))
                    <figure>
                        <img class="quiz-box__question-illustration" src="{{$question->illustration}}" alt="">
                    </figure>
                    @endif
                    <div class="quiz-box__choices-list">

                        @php
                        $choices = App\Models\Choice::where('question_identifier', $question->question_identifier)->where('quiz_id', $quiz->id)->get();
                        @endphp

                        @foreach($choices->shuffle()->all() as $choice)
                        <label class="quiz-box__choice uk-card uk-card-default">
                            <input class="quiz-box__radio" type="radio" name="question_{{$question->question_identifier}}_choice" value="{{$choice->id}}">
                            <div class="quiz-box__choice-description">
                                <div class="quiz-box__choice-letter-box">
                                    A
                                </div>
                                <div class="quiz-box__choice-answer-box">
                                    <p class="quiz-box__choice-answer">{{$choice->choice}}</p>
                                </div>
                            </div>
                        </label>
                        @endforeach
                    </div>
                    <div class="uk-alert-danger" uk-alert>
                        <a class="uk-alert-close"></a>
                        <p>lorem ipsum</p>
                    </div>
                </div>
                <hr class="quiz-box__divider">
                @endforeach
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