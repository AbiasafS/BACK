<x-admin-layout :breadcrumbs="[
    ['name' => 'Dashboard'],
    ['name' => route('admin.roles.index')]
]">
@livewire('admin.datatables.role-table')
   
</x-admin-layout>