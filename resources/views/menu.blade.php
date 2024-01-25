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

    <div class="bg-orange-200 flex justify-around flex-wrap p-2">
        @foreach($pizzas as $pizza)
            <div class="w-80 bg-yellow-50 h-[50vmin] flex flex-col justify-center m-2">
                <img class="self-center h-60" src="{{$pizza->image_path}}" alt="balza">
                <div class="p-3 flex gap-9">
                    <p class="text-2xl">{{$pizza->name}}</p>
                    <form class="text-sm w-4/5 h-4/5" action="https://google.com">
                        <input type="hidden" value="{{$pizza->id}}">
                        <select name="pepperoni" id="pepperoni">
=                           <option value="1">Small ${{$pizza->pizzaPrice->price_small}}</option>
                            <option value="2">Medium ${{$pizza->pizzaPrice->price_medium}}</option>s
                            <option value="3">Large ${{$pizza->pizzaPrice->price_large}}</option>
                        </select>
                        <button class="bg-red-400 hover:bg-red-500 text-yellow-50 relative left-[-6vmin] top-2 font-bold py-2 px-4 rounded">Add to cart</button>
                    </form>
                </div>
            </div>
        @endforeach

    </div>
    @include('includes.footer')
    </body>
</html>
