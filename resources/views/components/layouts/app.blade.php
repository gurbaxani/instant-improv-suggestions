<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Improv Suggestions In An Instant</title>
    <meta name="keywords" content="Improv, Comedy, Suggestions, for Practice, Rehearsals" />
    <meta name="description" content="An app that gives you hundreds of random suggestions for practicing with your Improv comedy team." />
    <meta name="author" content="Gurbax" />
    <meta property="og:image" content="{{ asset('iis.png') }}">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1080">
    <meta property="og:image:height" content="1080">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Mega:wght@700&family=Public+Sans:wght@700&display=swap" rel="stylesheet">
</head>

<body class="bg-yellow-400">
    {{ $slot }}
</body>

</html>