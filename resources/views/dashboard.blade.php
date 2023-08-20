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

            <div class="w-full h-56 bg-sky-700 flex items-center justify-around">
                <div class="relative w-1/4 h-36 bg-white rounded-md">
                    <h2 class="block text-left text-xl ml-3 my-4">Total Pacientes</h2>
                    @livewire('count-pacients')
                    <i class="absolute fas fa-user p-5 right-5 bottom-6 text-2xl bg-green-800 rounded-full"></i>
                </div>

                <div class="relative w-1/4 h-36 bg-white rounded-md">
                    <h2 class="block text-left text-xl ml-3 my-4">Total Médicos</h2>
                    @livewire('count-doctors')
                    <i class="absolute fas fa-user-md p-5 right-5 bottom-6 text-2xl bg-green-800 rounded-full"></i>
                </div>

                <div class="relative w-1/4 h-36 bg-white rounded-md">
                    <h2 class="block text-left text-xl ml-3 my-4">Total Especialidades</h2>
                    @livewire('count-specialties')
                    <i class="absolute fas fa-star-of-life p-5 right-5 bottom-6 text-2xl bg-green-800 rounded-full"></i>
                </div>
            </div>
        </div>
    </section>
    @livewireScripts
</body>
</html>