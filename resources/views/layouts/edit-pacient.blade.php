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
                {{--@livewire('data-pacient')--}}
            </div>
        </div>
    </section>
    @livewireScripts
</body>
</html>