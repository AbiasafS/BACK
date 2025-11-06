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

        <!-- wireui -->
        wireui:scripts />
        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased bg-gray-50  ">
        

        @include('layouts.includes.admin.navigation')
        @include('layouts.includes.admin.sidebar')




<div class="p-4 sm:ml-64">
   <!-- añadir margen superior -->
    <div class="mt-14 items-center justify-between w-full">
        @include ('layouts.includes.admin.breadcrumb', ['breadcrumbs' => $breadcrumbs])
    </div>
    {{ $slot }}
</div>


        @stack('modals')

        @livewireScripts

       
    </body>
</html>
