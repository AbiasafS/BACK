<x-admin-layout :breadcrumbs="[
    ['name' => 'Dashboard', 
    'href' => route('admin.dashboard')],
    ['name' => 'Usuarios',
    'href' => route('admin.users.index')]
   

    ]">
    <x-slot name="action">
    <x-wire-button blue  href="" class="spacebetween-x-2" >
        <i class="fa-solid fa-plus  ">
            
        </i> 
        Nuevo 
    </x-wire-button>
    </x-slot>
  Usuarios
    
    
</x-admin-layout>