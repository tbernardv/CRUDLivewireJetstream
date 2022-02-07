<x-slot name="header">
        <h1 class="text-gray-900">CRUD con Laravel 8 y Livewire</h1>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            <!-- Condicional para los mensajes flash edición, eliminación, creación... -->
            @if(session()->has('message'))
                <div class="bg-teal-100 rounded-b text-teal-900 px-4 py-4 shadow-md my-3" role="alert">
                    <div class="flex">
                        <div>
                            <h4>{{session('message')}}</h4>
                        </div>
                    </div>
                </div>
            @endif
            <button wire:click="crear()" class="bg-green-500 hover:bg-green-600 text-black font-bold py-2 px-4 my-3">Nuevo</button>
            <!-- Condicional para abrir o no el modal -->
            @if($modal)
                <!-- Llamando la plantilla crear de views/livewire -->
                @include('livewire.crear')
            @endif
            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-indigo-600 text-white">
                        <th class="px-4 py-2">ID</th>
                        <th class="px-4 py-2">DESCRIPCIÓN</th>
                        <th class="px-4 py-2">CANTIDAD</th>
                        <th class="px-4 py-2">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($productos as $producto)
                    <tr>
                        <td class="border px-4 py-2">{{$producto->id}}</td>
                        <td class="border px-4 py-2">{{$producto->descripcion}}</td>
                        <td class="border px-4 py-2">{{$producto->cantidad}}</td>
                        <td class="border px-4 py-2">
                            <button wire:click="editar({{$producto->id}})" class="bg-blue-500 hover:bg-blue-600 text-green font-bold py-2 px-4">Editar</button>
                            <button wire:click="borrar({{$producto->id}})" class="bg-red-500 hover:bg-red-600 text-red font-bold py-2 px-4">Borrar</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

    

