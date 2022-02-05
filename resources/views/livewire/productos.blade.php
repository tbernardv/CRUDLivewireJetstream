<div>
    {{-- In work, do what you enjoy. --}}

    <table class="table-fixed w-full">
        <thead>
            <tr class="bg-indigo-600 text-white">
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">DESCRIPCIÓN</th>
            </tr>
        </thead>
        <tbody>
            @foreach($productos as $producto)
            <tr>
                <td class="border px-4 py-2">{{$producto->id}}</td>
                <td class="border px-4 py-2">{{$producto->descripcion}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
