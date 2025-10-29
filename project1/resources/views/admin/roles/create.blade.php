<x-admin-layout :breadcrumbs="[
    ['name' => 'Dashboard'],
    ['name' => route('admin.roles.index')]
],
[
    'name' => 'Crear rol',
    'href' => route('admin.roles.create')
],
[
    'name' => ' Nuevo'
    
],

">
    
</x-admin-layout>