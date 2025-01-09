<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
<header>
    @include('partials._navigation')

    <h1>@yield('header', 'Welkom op mijn website')</h1>
</header>
<main class="main">
    @yield('content')
</main>
<footer>
    <p>&copy; {{ date('Y') }} Mijn Website</p>
</footer>
</body>
</html>
