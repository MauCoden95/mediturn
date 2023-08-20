<div>
    <div class="flex flex-col">
    <div class="">
        <div class="p-1.5 w-5/6 align-middle m-auto">
        <div class="">
            <table class="w-5/6 mt-52">
            <thead>
                <tr>
                <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">Id</th>
                <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">Nombre</th>
                <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">Dni</th>
                <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">Dirección</th>
                <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">Nacimiento</th>
                <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">Teléfono1</th>
                <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">Acciones</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
            @foreach ($pacients as $pacient)
                <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">{{$pacient->id}}</th>
                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium text-gray-800 dark:text-gray-200">{{$pacient->name}}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-gray-800 dark:text-gray-200">{{$pacient->dni}}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-gray-800 dark:text-gray-200">{{$pacient->address}}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-gray-800 dark:text-gray-200">{{$pacient->birth_date}}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-gray-800 dark:text-gray-200">{{$pacient->phone1}}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-center text-right text-sm font-medium">
                            <a class="text-blue-500 hover:text-blue-700" href="http://127.0.0.1:8000/paciente/{{$pacient->id}}"><i class="far fa-edit text-2xl text-green-700"></i></a>
                            <a class="text-blue-500 hover:text-blue-700" href="#"><i class="fas fa-trash text-2xl text-red-700"></i></a>
                        </td>
                </tr>
            @endforeach

               
            </tbody>
            </table>
        </div>
        </div>
    </div>
    </div>
</div>
