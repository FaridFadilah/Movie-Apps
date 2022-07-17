<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    @vite("resources/css/app.css")
    @vite("resources/js/app.js")
    @livewireStyles
</head>
<body>
    <x-navbar/>
    {{ $content }}
    <x-footer/>

    @livewireScripts
</body>
</html>