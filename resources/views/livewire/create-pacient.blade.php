<div class="relative w-4/5 h-3/4 rounded-md p-5 bg-white grid grid-cols-2 grid-rows-5 gap-4">
    <input class="w-full block text-base rounded-md" wire:model="name" type="text" name="name" placeholder="Nombre completo...">
    <input class="w-full block text-base rounded-md" wire:model="dni" type="number" name="dni" placeholder="Dni...">
    <input class="w-full block text-base rounded-md" wire:model="address" type="text" name="address" placeholder="Dirección...">
    <input class="w-full block text-base rounded-md" wire:model="birth_date" type="date" name="birth_date" placeholder="Fecha de nacimiento...">
    <input class="w-full block text-base rounded-md" wire:model="phone1" type="number" name="phone1" placeholder="Telefono...">
    <input class="w-full block text-base rounded-md" wire:model="phone2" type="number" name="phone2" placeholder="Telefono2...">
    <input class="w-full block text-base rounded-md" wire:model="health_insurance" type="text" name="health_insurance" placeholder="Obra Social...">
    <input class="w-full block text-base rounded-md" wire:model="numbre_health_insurance" type="number" name="numbre_health_insurance" placeholder="Numero de beneficiario...">
    <input class="w-full block text-base rounded-md" wire:model="history" type="text" name="history" placeholder="Historial clinico...">
    <button wire:click="save" class="w-full block text-base rounded-md bg-green-800 p-1">Guardar </button>
</div>
