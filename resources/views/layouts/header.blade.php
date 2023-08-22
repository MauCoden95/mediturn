<header class="w-full h-1/6 bg-sky-700 flex items-center justify-between">
    <h2 class="text-2xl ml-5">Bienvenido, {{ Auth::user()->username }}</h2>
    <p id="date-hour" class="text-xl"></p>
    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <a aria-current="page" href="route('logout')"
            onclick="event.preventDefault();
        this.closest('form').submit();"
            class="bg-red-500 hover:bg-red-700 mr-5 text-md text-white p-3 rounded hover:text-white hover:text-red-800">Cerrar
            sesión <i class="fas fa-sign-out-alt"></i></a>
    </form>
</header>