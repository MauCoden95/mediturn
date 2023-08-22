<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Mediturn</title>
</head>
<body>
    <section class="w-screen h-screen flex items-center justify-evenly bg-blue-300">

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
        <img  src="{{ asset('img/Logo.png') }}" alt="Logo">
        <form class="w-2/6 bg-white p-5 rounded-lg" method="POST" action="{{ route('login') }}" autocomplete="off">
            
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="username" :value="__('Usuario')" />
                <x-text-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('username')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Contraseña')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            

            <div class="flex items-center justify-end mt-4">
                

                <x-primary-button class="ml-3 bg-sky-800">
                    {{ __('Ingresar al sistema') }} 
                </x-primary-button>
            </div>
        </form>
    </section>
</body>
</html>

