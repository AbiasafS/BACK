@php
$Links = [
    [
        'name' => 'dashboard',
        'icon' => 'fa-solid fa-gauge',
        'href' => route('admin.dashboard'),
        'active' => request()->routeIs('admin.dashboard'),
    ],
    [
        'header' => 'Hospital',
    ],
    [
        'name' => 'Dashboard', // Este es el enlace padre del submenú
        'icon' => 'fa-solid fa-gauge',
        'href' => '#', // El padre no necesita enlace, solo abre el menú
        'active' => false,
        'submenu' => true,
        
        // CORRECCIÓN: Los items del submenú deben ir anidados en una llave 'items'
        'items' => [
            [
                'name' => 'Patients', // Corregido: sin espacio en 'name '
                'icon' => 'fa-solid fa-user-injured',
                'href' => '#',
                'active' => false,
            ],
            [
                'name' => 'Appoiments', // Corregido: sin espacio en 'name '
                'icon' => 'fa-solid fa-user-injured',
                'href' => '#',
                'active' => false,
            ],
            [
                'name' => 'INVOICE', // Corregido: sin espacio en 'name '
                'icon' => 'fa-solid fa-user-injured',
                'href' => '#',
                'active' => false,
            ],
        ]
    ],
];
@endphp



<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
   <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
      <ul class="space-y-2 font-medium">

         {{-- Bucle principal --}}
         @foreach ($Links as $link)
         <li>
            @isset($link['header'])
               {{-- CASO 1: Es un encabezado (ej. 'Hospital') --}}
               <div class="px-3 mt-4 mb-2 text-xs font-semibold text-gray-500 uppercase dark:text-gray-400">
                  {{ $link['header'] }}
               </div>

            @elseif (isset($link['submenu']))
               {{-- CASO 2: Es un enlace con submenú --}}
               
               {{-- Botón para abrir/cerrar el submenú --}}
               <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-{{ $link['name'] }}" data-collapse-toggle="dropdown-{{ $link['name'] }}">
                  <span class="shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
                     <i class="{{ $link['icon'] }}"></i>
                  </span>
                  <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">{{ $link['name'] }}</span>
                  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                  </svg>
               </button>

               {{-- Lista de items del submenú --}}
               <ul id="dropdown-{{ $link['name'] }}" class="hidden py-2 space-y-2">
                  {{-- CORRECCIÓN: Bucle para recorrer los 'items' del submenú --}}
                  @foreach ($link['items'] as $item)
                  <li>
                     <a href="{{ $item['href'] }}" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                        <i class="{{ $item['icon'] }} me-2 w-4"></i> {{ $item['name'] }}
                     </a>
                  </li>
                  @endforeach
               </ul>

            @else
               {{-- CASO 3: Es un enlace simple (ej. 'dashboard') --}}
               <a href="{{ $link['href'] }}" 
                  class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group {{ $link['active'] ? 'bg-gray-100 dark:bg-gray-700' : '' }}">
                  <span class="shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
                     <i class="{{ $link['icon'] }}"></i>
                  </span>
                  <span class="ms-3">{{ $link['name'] }}</span>
               </a>
            @endisset
         </li>
         @endforeach
         
         {{-- Este es el enlace estático que ya tenías --}}
         <li>
            <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <svg class="shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.96 2.96 0 0 0 .13 5H5Z"/>
                  <path d="M6.737 11.061a2.961 2.961 0 0 1 .81-1.515l6.117-6.116A4.839 4.839 0 0 1 16 2.141V2a1.97 1.97 0 0 0-1.933-2H7v5a2 2 0 0 1-2 2H0v11a1.969 1.969 0 0 0 1.933 2h12.134A1.97 1.97 0 0 0 16 18v-3.093l-1.546 1.546c-.413.413-.94.695-1.513.81l-3.4.679a2.947 2.947 0 0 1-1.85-.227 2.96 2.96 0 0 1-1.635-3.257l.681-3.397Z"/>
                  <path d="M8.961 16a.93.93 0 0 0 .189-.019l3.4-.679a.961.961 0 0 0 .49-.263l6.118-6.117a2.884 2.884 0 0 0-4.079-4.078l-6.117 6.117a.96.96 0 0 0-.263.491l-.679 3.4A.961.961 0 0 0 8.961 16Zm7.477-9.8a.958.958 0 0 1 .68-.281.961.961 0 0 1 .682 1.644l-.315.315-1.36-1.36.313-.318Zm-5.911 5.911 4.236-4.236 1.359 1.359-4.236 4.237-1.7.339.341-1.699Z"/>
               </svg>
               <span class="flex-1 ms-3 whitespace-nowrap">Sign Up</span>
            </a>
         </li>
      </ul>
   </div>
</aside>