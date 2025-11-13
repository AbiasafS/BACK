@php
// 1. Definimos los breadcrumbs correctos.
//    Solo DOS elementos: el padre (link) y la página actual (texto).
$breadcrumbs = [
    [
        'name' => 'Roles y permisos',
        'href' => route('admin.roles.index')
    ],
    [
        'name' => 'Edit'
    ]
];
@endphp

{{-- 2. Pasamos la variable :breadcrumbs al layout --}}
<x-admin-layout :breadcrumbs="$breadcrumbs">

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Rol') }}
        </h2>
    </x-slot>

    <x-wire-card>
    <form action="{{route('admin.roles.update', $role)}}" method="POST">
        @csrf
        @method('PUT')
        <x-wire-input
        label="Nombre"
        name="name"
        placeholder="Nombre del rol"
        value="{{ old('name', $role->name) }}"
        >
    </x-wire-input>

    <div class="mt-4 flex justify-end space-x-2 ">
        <x-wire-button type="submit">Actualizar</x-wire-button>
    </div>
    </form>
    </x-wire-card>

    

</x-admin-layout>