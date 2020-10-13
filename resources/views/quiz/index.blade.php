@extends('partials.base-layout')


@section('layout-content')

<div class="box-margin">

    <!-- liste des thèmes de quiz -->
    <div class="themes-list">
        <ul class="themes-list__list-items">
            @foreach($categories as $categorie)
            <li class="themes-list__item">
                <a href="#" class="themes-list__link">
                    {{$categorie->name}}
                </a>
            </li>
            @endforeach
        </ul>
    </div>

    <!-- liste des quiz -->
    <div class="quizes-list">
        @foreach($quizes as $quiz)
        <a class="quizes-list__link" href="{{route('quiz.startQuiz', ['quizId' => $quiz->id, 'slug' => $quiz->slug])}}">
            <div class="quizes-list__quiz-box quizes-list__quiz-box--geo uk-card uk-card-default uk-card-body" style="background-image:linear-gradient(rgba(0, 0, 0, 0.301), rgba(0, 0, 0, 0.301)), url('/images/boxes/{{$quiz->illustration}}') !important;">
                <span class="quizes-list__questions-number">20</span>
                <span class="quizes-list__title">{{$quiz->title}}</span>
            </div>
        </a>
        @endforeach
    </div>


</div>

@endsection

@section('js')
<script>
    // self executing function here
    (function() {

        var quizBox = {
            addMargin: function() {
                var quizBox = $('.quizes-list__quiz-box');

                if ($(window).width() < 768) {
                    // console.log('yo');
                    quizBox.css({
                        'margin': '1.5rem'
                    })
                } else {
                    quizBox.css({
                        'margin': '0rem'
                    })
                };

                $(window).on('resize', function() {
                    if ($(window).width() < 768) {
                        // console.log('yo');
                        quizBox.css({
                            'margin': '1.5rem'
                        })
                    } else {
                        quizBox.css({
                            'margin': '0rem'
                        })
                    };
                });
            }
        }
        quizBox.addMargin();
    })();
</script>

@endsection