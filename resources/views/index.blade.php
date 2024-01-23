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
    <div class="flex flex-row-reverse">
        <div class="absolute bg-orange-200 w-[64vmin] h-[48vmin] z-10 self-center right-12 rounded text-red-400">
            <div class="p-4 flex flex-col">
                <div>
                    <p>Welcome to,</p>
                    <p class="text-5xl">Stonks Pizza</p>
                </div>
                <div>
                    <br>
                    <p>Only the best pizza's</p>
                    <br>
                    <span class="text-red-400 font-bold">Margherita</span><span class="text-red-400 font-normal font-['Comic Sans MS']"> - tomato sauce, mozzarella, fresh tomatoes and basil.</span>
                </div>
                <a class="self-center mt-12" href="{{route('menu')}}">
                    <div class="flex justify-center items-center bg-cyan-500 h-12 w-64 rounded">
                        <p class="text-yellow-50">Click here for the whole menu!</p>
                    </div>
                </a>
            </div>

        </div>
        <img class=" object-cover h-[90vmin] w-full" src="https://images.unsplash.com/photo-1593504049359-74330189a345?q=80&w=2127&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
    </div>
    @include('includes.footer')
    </body>
</html>
