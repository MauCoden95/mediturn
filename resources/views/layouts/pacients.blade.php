<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    <script src="https://kit.fontawesome.com/7483adbd94.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/Styles.css') }}">
    

    <title>Mediturn</title>
</head>
<body class="relative">
    <section class="w-screen h-screen flex">
        @include('layouts.navbar')
        <div class="w-5/6 h-screen">
            @include('layouts.header')

            <div class="overflow-y-scroll relative w-100 h-5/6">
                <div id="form_create" class="absolute w-full h-full bg-black bg-opacity-80 z-50 flex flex-col items-center justify-around">
                   <button class="btn_close absolute right-2 top-2 text-white"><i class="text-6xl fas fa-times"></i></button>
                   @livewire('create-pacient')
                </div>

                <div class="absolute top-4 left-4 w-1/4 h-36 bg-sky-400 rounded-md">
                    <h2 class="block text-left ml-3 text-xl my-4">Total Pacientes</h2>
                    @livewire('count-pacients')
                    <i class="absolute fas fa-user p-5 right-5 bottom-6 text-2xl bg-green-800 rounded-full"></i>
                </div>

                <button
                    type="button"
                    class="btn_add absolute top-4 right-4 bg-green-800 hover:bg-green-950 rounded bg-success px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#14a44d] transition duration-150 ease-in-out hover:bg-success-600 hover:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] focus:bg-success-600 focus:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] focus:outline-none focus:ring-0 active:bg-success-700 active:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(20,164,77,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)] rounded-sm">
                    <span class="text-xl">Añadir</span>
                    <i class="block text-xl text-green-800 bg-white rounded-9999 p-3 ml-3 fas fa-plus rounded-full"></i>
                </button>

               
                
                @livewire('show-pacients')
            </div>
        </div>
    </section>
    

    <script src="{{ asset('js/Main.js') }}"></script>
    @livewireScripts
</body>
</html>