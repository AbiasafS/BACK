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

    {{-- Este es el único contenido que tenías --}}
    Hola profe

</x-admin-layout>