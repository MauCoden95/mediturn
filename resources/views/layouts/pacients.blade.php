<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    <script src="https://kit.fontawesome.com/7483adbd94.js" crossorigin="anonymous"></script>
    <title>Mediturn</title>
</head>
<body>
    <section class="w-screen h-screen flex">
        @include('layouts.navbar')
        <div class="w-5/6 h-screen">
            @include('layouts.header')

            <div class="relative w-100 h-5/6">
                <div class="absolute top-4 left-4 w-1/4 h-36 bg-sky-700 rounded-md">
                    <h2 class="block text-left ml-3 text-xl my-4">Total Pacientes</h2>
                    @livewire('count-pacients')
                </div>

                <button class="absolute flex flex-col justify-center right-4 w-1/4 h-36 bg-sky-700 rounded-md text-center text-xl my-4">
                   Añadir Paciente          
                   <i class="block text-3xl fas fa-plus"></i>
                </button>

                @livewire('show-pacients')
            </div>
        </div>
    </section>
    @livewireScripts
</body>
</html>