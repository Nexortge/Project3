<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <title>Employee</title>
    </head>
    <body class="min-h-screen justify-center items-center flex">
    <div class="h-full flex flex-col items-center">
        <h1 class=" p-8 text-8xl">Welcome employee!</h1>
        <p class="text-2xl">There are <strong>{{$orderAmount}}</strong> order(s) in the system.</p>
        <a href="{{route('employeeOrders')}}" class="mt-8 p-4 bg-blue-500 text-white rounded-lg">View orders</a>
    </div>
    </body>
</html>