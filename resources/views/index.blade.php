<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Localhost</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="comic-sans bg-yellow-50">
    @include('includes.header')
    <p>van je bie boe ba bananana</p>

    @include('includes.footer')
    </body>
</html>
