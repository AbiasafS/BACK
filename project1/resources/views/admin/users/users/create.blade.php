<x-admin-layout :breadcrumbs="
[
    [ 'name' => 'usuarios', 'href' => route('users.roles.index') ],
    [ 'name' => 'Crear ususario', 'href' => route('users.roles.create') ]
]">
 <span>
    Nuevo
 </span>   
<x-wire-card>
    <form action="{{route('users.users.store')}}" method="POST">
        @csrf
        <x-wire-input
        label="Nombre"
        name="name"
        placeholder="Nombre del usuario"
        value="{{ old('name') }}"
        >
    </x-wire-input>

    <div class="mt-4 flex justify-end space-x-2 ">
        <x-wire-button type="submit">Guardar</x-wire-button>
    </div>
    </form>
</x-wire-card>














    </x-admin-layout>