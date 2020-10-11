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

    <div class="quizes-list__quiz-box uk-card uk-card-default uk-card-body">

    </div>

    <div class="quizes-list__quiz-box uk-card uk-card-default uk-card-body">

    </div>

    <div class="quizes-list__quiz-box uk-card uk-card-default uk-card-body">

    </div>

    <div class="quizes-list__quiz-box uk-card uk-card-default uk-card-body">

    </div>
</div>

@endsection