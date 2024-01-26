<!doctype html>
@php
    use App\Http\Controllers\EmployeeController;
    $status = EmployeeController::class
@endphp

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Your Order status</title>
    <style>
        /* You can place custom styles here */
    </style>
</head>
<body class="">
@include('includes.header')
<h1 class="text-4xl mt-8 mb-4 text-center">Your Order status</h1>
<div class="max-w-lg mx-auto">
    <p class="mb-4">Your order is currently
        @if($order->status != "completed and is ready for pickup")
            <span class="font-bold text-red-500">{{$order->status}}</span>
        @else
            <span class="font-bold text-green-500">{{$order->status}}</span>
        @endif
    </p>
    <p class="mb-4">Order ID: <span class="font-bold">{{$order->id}}</span></p>
    <div>
        @foreach($order->orderItems as $item)
            @php
                $pizza = \App\Models\Pizza::find($item->pizza_id);
            @endphp
            @for ($i = 0; $i < $item['quantity']; $i++)
                <div class="flex justify-between items-center bg-yellow-50 shadow h-24 mb-4 px-4 py-2 rounded-md">
                    <img class="h-20" src="{{$pizza->image_path}}" alt="pizza">
                    <p class="flex-1">{{$pizza->name}}</p>
                    @switch($item['size'])
                        @case('price_small')
                            <p class="flex-1">Small</p>
                            @break
                        @case('price_medium')
                            <p class="flex-1">Medium</p>
                            @break
                        @case('price_large')
                            <p class="flex-1">Large</p>
                            @break
                    @endswitch
                </div>
            @endfor
        @endforeach
        @if($order->status == 'preparing')
            <form action="{{ route('cancelOrder', $order->id) }}" method="POST" class="flex flex-col items-center space-y-2 w-[90%] max-w-lg">
                @csrf
                <input type="hidden" name="order_id" value="{{$order->id}}">
                <input type="submit" value="Cancel Order" class="bg-red-500 text-white px-4 py-2 rounded-md">
            </form>
        @endif
    </div>

</div>
@include('includes.footer')

</body>
</html>
