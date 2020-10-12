<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.8/dist/css/uikit.min.css" />

    <!-- UIkit JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.8/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.8/dist/js/uikit-icons.min.js"></script>

    <title>Quiz</title>
</head>

<body class="body">
    <!-- * Header * -->

    <nav class="navbar">
        <a href="{{ route('home.index') }}" class="navbar__link navbar__link--login" aria-hidden="true">
            <img class="navbar__logo is-rounded" src="{{ asset('images/logo/question.png') }}" alt="logo du site web">
        </a>

        <a href="{{ route('login.create') }}" class="navbar__link navbar__link--login" aria-hidden="true">
            <i class="navbar__icon navbar__icon--login fa fa-dot-circle-o" aria-hidden="true"></i>
        </a>
    </nav>
    @yield('header')

    <!-- * Menu * -->



    <!-- * Main * -->

    <main class="main">

        <!-- * Contenu de la page * -->

        @yield('layout-content')

    </main>

    <!-- * Footer * -->

    @yield('js')
</body>
</html>