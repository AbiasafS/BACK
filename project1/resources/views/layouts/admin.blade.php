@props(['breadcrumbs' => []])
@props ([
'title' => config('app.name', 'Laravel'),
'breadcrumbs' => [],



])


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        











        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link 
        rel="stylesheet" 
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" 
        crossorigin="anonymous" 
        referrerpolicy="no-referrer" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])


        <!-- sweet alert 2 -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


        <!-- wireui -->
        wireui:scripts />
        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased bg-gray-50  ">
        

        @include('layouts.includes.admin.navigation')
        @include('layouts.includes.admin.sidebar')




<div class="p-4 sm:ml-64">
    <div class="mt-14 w-full">

        <div class="flex justify-between items-center mb-4">

            <div>
                @include ('layouts.includes.admin.breadcrumb', ['breadcrumbs' => $breadcrumbs])
            </div>

            <div>
                @isset($action)
                    {{ $action }}
                @endisset
            </div>
        </div>
        {{ $slot }}
    </div>
</div>


        @stack('modals')

        @livewireScripts

        <!-- mostrar sweetalert -->
        {{-- CÓDIGO CORRECTO --}}
        @if (session('swal'))
        <script>
        Swal.fire({
            title: '{{ session('swal')['title'] }}', // <--- Así accedes al título
            text: '{{ session('swal')['text'] }}',   // <--- Así al texto
            icon: '{{ session('swal')['icon'] }}',   // <--- Y así al ícono
            timer: {{ session('swal')['timer'] ?? 3000 }} // timer es un número, no un string
        });
        </script>
@endif

        <script>
            //buscar todos los elemntos ed una clase espeficica 
            forms = document.querySelectorAll('.delete-form');
            forms.forEach(form => {
                // Agregar un listener para el evento submit
                form.addEventListener('submit', function(event) {
                    event.preventDefault(); // Prevenir el envío inmediato del formulario

                    Swal.fire({
                        title: '¿Estás seguro?',
                        text: "¡No podrás revertir esto!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Sí, eliminarlo!',
                        cancelButtonText: 'Cancelar'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            form.submit(); // Enviar el formulario si el usuario confirma
                        }
                    });
                });
            });
        </script>

       
    </body>
</html>
