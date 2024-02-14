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
    <div x-data="{ open: false }" class="hamburger">
        <div class="container mx-auto flex justify-between items-center p-2">
            <div class="font-bold text-xl">Improv Suggestions</div>
            <button @click="open = !open" class="lg:hidden ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5M12 17.25h8.25" />
                </svg>
            </button>
            <div class="hidden lg:flex">
                <ul class="lg:flex space-x-4">
                    <li><a class="" href="https://forms.gle/UKBw5jGcYGNj5B948" target="_blank">Add A Suggestion</a></li>
                    <li><a class="" href="https://gurbax.click">Contact</a></li>
                    <li><a class="" href="https://github.com/gurbaxani/instant-improv-suggestions">Source Code</a></li>
                </ul>
            </div>
        </div>
        <div x-show="open" x-transition:enter="transform ease-out duration-300 transition-translate-opacity" x-transition:enter-start="translate-y-10 opacity-0" x-transition:enter-end="translate-y-0 opacity-100" x-transition:leave="transform ease-in duration-300 transition-translate-opacity" x-transition:leave-start="translate-y-0 opacity-100" x-transition:leave-end="translate-y-10 opacity-0" class="lg:hidden">
            <ul class="text-right pr-4">
                <li><a class="" href="https://forms.gle/UKBw5jGcYGNj5B948" target="_blank">Add A Suggestion</a></li>
                <li><a class="" href="https://gurbax.click">Contact</a></li>
                <li><a class="" href="https://github.com/gurbaxani/instant-improv-suggestions" target="_blank">Source Code</a></li>
            </ul>
        </div>
    </div>

    {{ $slot }}
</body>




</html>