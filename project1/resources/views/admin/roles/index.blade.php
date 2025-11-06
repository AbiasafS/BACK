<x-admin-layout :breadcrumbs="[
    ['name' => 'Roles y permisos'],
    ['href' => route('admin.roles.index')]
]">

    <x-slot name="action">
        <x-wire-button href="{{ route('admin.roles.create') }}" blue >
            <i class="fa-solid fa-plus ""></i> 
            Nuevo rol
        </x-wire-button>
    </x-slot>

@livewire('admin.datatables.role-table')

</x-admin-layout>