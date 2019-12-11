<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <link href="https://fonts.googleapis.com/css?family=Rubik:400,500,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/github-markdown-css/3.0.1/github-markdown.css">
    </head>
    <body class="font-sans antialiased bg-gray-300">
    <header class="relative">
        <div class="stripes absolute">
        </div>
        <div id="app" class="container relative">
            @include('_partials.menu')

            @yield('body')
        </div>
    </header>
    <footer class="container py-20">
    <p class="text-gray-600 text-center font-normal"> Copyright © 2019. Made with <span class="text-red-400">❤</span> from Lucky Media  </p>
    </footer>
    <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
    </body>
</html>
