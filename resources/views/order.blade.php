<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Order</title>
</head>
<body>
@include('includes.header')

<h1 class="text-3xl text-center mt-8 mb-4">Your Order</h1>

<div class="flex flex-col items-center space-y-4 p-12">
    @if($cart != null)
        @php
            $total = 0;
        @endphp
        @foreach($cart as $item)
            @php
                $pizza = $pizzas->firstWhere('id', $item['pizzaId']);
            @endphp
            @for ($i = 0; $i < $item['quantity']; $i++)
                <div class="flex justify-between items-center bg-yellow-50 shadow h-24 px-4 py-2 rounded-md w-[90%] max-w-lg">
                    <img class="h-20" src="{{$pizza->image_path}}" alt="balza">
                    <p class="flex-1">{{$item['name']}}</p>
                    @switch($item['size'])
                        @case('price_small') <p class="flex-1">Small</p> @break
                        @case('price_medium') <p class="flex-1">Medium</p> @break
                        @case('price_large') <p class="flex-1">Large</p> @break
                    @endswitch
                    <p class="flex-1">{{$item['price']}}</p>
                    <form action="{{ route('removeFromOrder') }}" method="POST" class="flex-1">
                        @csrf
                        <input type="hidden" name="pizza_id" value="{{$item['pizzaId']}}">
                        <input type="hidden" name="size" value="{{$item['size']}}">
                        <input type="submit" value="Remove" class="bg-red-500 text-white px-4 py-2 rounded-md">
                    </form>
                </div>
                @php
                    $total += $item['price'];
                @endphp
            @endfor
        @endforeach
        <div class="flex justify-end w-[90%] max-w-lg">
            <p class="font-bold mr-2">Total:</p>
            <p>{{$total}}</p>
        </div>

        <form action="{{ route('placeOrder') }}" method="POST" class="flex flex-col items-center space-y-2 w-[90%] max-w-lg">
            @csrf
            <label for="name" class="font-bold">Name:</label>
            <input type="text" name="name" id="name" class="border border-gray-300 rounded-md p-2">
            <label for="address" class="font-bold">Address:</label>
            <input type="text" name="address" id="address" class="border border-gray-300 rounded-md p-2">
            <input type="submit" value="Order" class="bg-cyan-500 text-white px-4 py-2 rounded-md">
        </form>
    @else
        <p class="text-center">Cart is empty</p>
    @endif
</div>

@include('includes.footer')
</body>
</html>
