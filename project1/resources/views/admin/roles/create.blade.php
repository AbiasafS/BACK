<x-admin-layout :breadcrumbs="
[
    [ 'name' => 'Roles y permisos', 'href' => route('admin.roles.index') ],
    [ 'name' => 'Crear rol', 'href' => route('admin.roles.create') ]
]">
 <span>
    Nuevo
 </span>   
<x-wire-card>
    <form action="{{route('admin.roles.store')}}" method="POST">
        @csrf
        <x-wire-input
        label="Nombre"
        name="name"
        placeholder="Nombre del rol"
        value="{{ old('name') }}"
        >
    </x-wire-input>

    <div class="mt-4 flex justify-end space-x-2 ">
        <x-wire-button type="submit">Guardar</x-wire-button>
    </div>
    </form>
</x-wire-card>














    </x-admin-layout>