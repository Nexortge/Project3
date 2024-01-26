<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Current Orders</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.order-header').click(function(){
                $(this).next('.order-details').toggle();
                $(this).find('.arrow').toggleClass('rotate-180');
            });
        });

    </script>

    <style>
        .order-details {
            display: none;
        }
    </style>

</head>
<body>
<h1 class="text-4xl">Current Orders</h1>
<div class="orders-container">
    @foreach($orders as $item)
    <div class="order">
        <div class="order-header cursor-pointer flex justify-between items-center">
            <p>Order ID: {{$item->id}}</p>
            <p class="arrow">-></p>
        </div>
        @foreach($item->orderItems as $orderItem)
            @php
                $pizza = \App\Models\Pizza::find($orderItem->pizza_id);
            @endphp
            <div class="p-4 order-details">
                <p>Pizza Name: {{$pizza->name}}</p>
                <p>Order Item ID: {{$orderItem->id}}</p>
                <p>Quantity: {{$orderItem->quantity}}</p>
                @switch($orderItem->size)
                    @case('price_small')
                        <p>Size: Small</p>
                        @break
                    @case('price_medium')
                        <p>Size: Medium</p>
                        @break
                    @case('price_large')
                        <p>Size: Large</p>
                        @break
                    @default
                        <p>Size: Unknown</p>
                @endswitch
                <label for="orderItem{{$orderItem->id}}">Completed</label>
                <input class="checkbox" id="orderItem{{$orderItem->id}}" type="checkbox">
            </div>
        @endforeach

        <div class="flex p-4 gap-4">
            <form action="{{route('removeOrder')}}" method="POST">
                @csrf
                <input type="hidden" name="order_id" value="{{$item->id}}">
                <button class="p-4 bg-red-500 text-white">Remove Order</button>
            </form>
            <form action="{{ route('completeOrder')}}" method="POST">
                @csrf
                <input type="hidden" name="order_id" value="{{$item->id}}">
                <button class="p-4 bg-green-500 text-white">Complete Order</button>
            </form>
        </div>


    </div>
    @endforeach
    <!-- Additional orders -->
</div>

</body>
</html>