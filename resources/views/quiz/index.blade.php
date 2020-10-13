@extends('partials.base-layout')


@section('layout-content')

<!-- liste des thèmes de quiz -->
<div class="themes-list">
    <ul class="themes-list__list-items">
        <li class="themes-list__item themes-list__item--active">
            <a href="#" class="themes-list__link">
                Histoire
            </a>
        </li>
        <li class="themes-list__item">
            <a href="#" class="themes-list__link">
                Géographie
            </a>
        </li>
        <li class="themes-list__item">
            <a href="#" class="themes-list__link">
                Animaux
            </a>
        </li>
        <li class="themes-list__item">
            <a href="#" class="themes-list__link">
                Réseaux sociaux
            </a>
        </li>
    </ul>
</div>

<!-- liste des quiz -->
<div class="quizes-list">
    <a class="quizes-list__link" href="{{route('quiz.startQuiz', ['id' => 1, 'slug' => 'mythologie-africaine'])}}">
        <div class="quizes-list__quiz-box quizes-list__quiz-box--geo uk-card uk-card-default uk-card-body ">
            <span class="quizes-list__questions-number">20</span>
            <span class="quizes-list__title">Mythologie africaine</span>
        </div>
    </a>

    <a class="quizes-list__link" href="#">
        <div class="quizes-list__quiz-box quizes-list__quiz-box--history uk-card uk-card-default uk-card-body ">
            <span class="quizes-list__questions-number">20</span>
            <span class="quizes-list__title">Première guerre mondiale</span>
        </div>
    </a>

    <a class="quizes-list__link" href="#">
        <div class="quizes-list__quiz-box quizes-list__quiz-box--history uk-card uk-card-default uk-card-body ">
            <span class="quizes-list__questions-number">20</span>
            <span class="quizes-list__title">Le 3e art</span>
        </div>
    </a>

    <a class="quizes-list__link" href="#">
        <div class="quizes-list__quiz-box quizes-list__quiz-box--history uk-card uk-card-default uk-card-body ">
            <span class="quizes-list__questions-number">20</span>
            <span class="quizes-list__title">Première guerre mondiale</span>
        </div>
    </a>

    <a class="quizes-list__link" href="#">
        <div class="quizes-list__quiz-box quizes-list__quiz-box--social-network uk-card uk-card-default uk-card-body ">
            <span class="quizes-list__questions-number">20</span>
            <span class="quizes-list__title">Seconde guerre mondiale</span>
        </div>
    </a>

    <a class="quizes-list__link" href="#">
        <div class="quizes-list__quiz-box quizes-list__quiz-box--wild uk-card uk-card-default uk-card-body">
            <span class="quizes-list__questions-number">20</span>
            <span class="quizes-list__title">Mythologie grecque</span>
        </div>
    </a>
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