<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Menu</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <?php
            session_start();
            $user = $_SESSION['user'];
        ?>
    </head>
    <body class="font-sans antialiased text-gray-800 bg-gray-100 dark:bg-gray-900 dark:text-white">
    </body>
</html>
