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
        <div class="absolute bg-orange-300 w-[196vmin] h-[60vmin] z-10 self-center right-12 rounded text-red-400">
            <div class="p-4 flex flex-col">
                <!--div>
                    <span class="text-red-400 font-bold">Margherita</span>
                    <span class="text-red-400 font-normal font-['Comic Sans MS']"> - tomato sauce, mozzarella, fresh tomatoes and basil.</span>
                </div-->
                <div class="w-[60vmin] h-[50vmin] relative">
                    <img class="w-[25vmin] h-[25vmin] left-[15vmin] top-0 absolute" src="https://via.placeholder.com/269x256" />
                    <img class="w-[25vmin] h-[25vmin] left-[65vmin] top-0 absolute" src="https://via.placeholder.com/279x256" />
                    <img class="w-[25vmin] h-[25vmin] left-[110vmin] top-0 absolute" src="https://via.placeholder.com/247x256" />
                    <img class="w-[25vmin] h-[25vmin] left-[155vmin] top-0 absolute" src="https://via.placeholder.com/276x256" />
                    <div class="left-[20vmin] top-[279px] absolute"><span style="text-red-400 text-[32px] font-bold font-['Comic Sans MS']">Pepperoni<br/></span><span style="text-red-400 text-xl font-normal font-['Comic Sans MS']">With fresh meat!<br/></span><span style="text-red-400 text-xl font-bold font-['Comic Sans MS']">20.00 eur</span></div>
                    <div class="w-[182.63px] h-[167px] left-[70vmin] top-[279px] absolute"><span style="text-red-400 text-[32px] font-bold font-['Comic Sans MS']">Green stuff<br/></span><span style="text-red-400 text-xl font-normal font-['Comic Sans MS']">With fresh green stuff!<br/></span><span style="text-red-400 text-xl font-bold font-['Comic Sans MS']">20.00 eur</span></div>
                    <div class="w-[182.63px] left-[115vmin] top-[285px] absolute"><span style="text-red-400 text-[32px] font-bold font-['Comic Sans MS']">Mark<br/></span><span style="text-red-400 text-xl font-normal font-['Comic Sans MS']">King of the nether!<br/></span><span style="text-red-400 text-xl font-bold font-['Comic Sans MS']">19000.00 eur</span></div>
                    <div class="w-[182.63px] left-[160vmin] top-[285px] absolute"><span style="text-red-400 text-[32px] font-bold font-['Comic Sans MS']">Dough ball<br/></span><span style="text-red-400 text-xl font-normal font-['Comic Sans MS']">With fresh dough!<br/></span><span style="text-red-400 text-xl font-bold font-['Comic Sans MS']">8.00 eur</span></div>
                </div>
            </div>
        </div>
        <div class="object-cover h-[65vmin] w-full bg-orange-200">
        </div>

    </div>


    @include('includes.footer')
    </body>
</html>
