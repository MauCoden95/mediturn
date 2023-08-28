@if (session('success'))
    <script>
        showSuccessAlert({{ session('success') }});
    </script>
@endif

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
            <h3 class="text-center text-xl mt-4 mb-1">Editar Paciente</h3>
            @foreach($pacient as $data)
                
                <form action="{{ route('pacient-update', [$data->id]) }}" method="POST" id="createPacientForm" class="form_add m-auto relative w-4/5 h-3/4 rounded-md p-5 bg-white grid grid-cols-2 grid-rows-5 gap-4">
                    @csrf
                    @method('PUT')
                    <input class="w-full block text-base rounded-md" value='{{$data->name}}' type="text" name="name" placeholder="Nombre completo...">
                    <input class="w-full block text-base rounded-md" value='{{$data->dni}}' type="number" name="dni" placeholder="Dni...">
                    <input class="w-full block text-base rounded-md" value='{{$data->address}}' type="text" name="address" placeholder="Dirección...">
                    <input class="w-full block text-base rounded-md" value='{{$data->birth_date}}' type="date" name="birth_date" placeholder="Fecha de nacimiento...">
                    <input class="w-full block text-base rounded-md" value='{{$data->phone1}}' type="number" name="phone1" placeholder="Telefono...">
                    <input class="w-full block text-base rounded-md" value='{{$data->phone2}}' type="number" name="phone2" placeholder="Telefono2...">
                    <input class="w-full block text-base rounded-md" value='{{$data->health_insurance}}' type="text" name="health_insurance" placeholder="Obra Social...">
                    <input class="w-full block text-base rounded-md" value='{{$data->numbre_health_insurance}}' type="number" name="numbre_health_insurance" placeholder="Numero de beneficiario...">
                    <input class="w-full block text-base rounded-md" value='{{$data->history}}' type="text" name="history" placeholder="Historial clinico...">
                    <button type="submit" id="btnCreatePacientForm" class="w-full block text-base rounded-md bg-green-800 p-1">Editar </button>

                    @if (session('pacient_update_success'))
                        <script>
                            Swal.fire({
                                icon: 'success',
                                title: 'Éxito',
                                text: '{{ session("success") }}'
                            });
                        </script>
                    @endif
                </form>
            @endforeach  

           
            
            
     
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="{{ asset('js/Main.js') }}"></script>
    @livewireScripts
</body>
</html>