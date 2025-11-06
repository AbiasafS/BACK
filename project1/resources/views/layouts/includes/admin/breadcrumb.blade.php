@if (count($breadcrumbs))
    <nav class="mb-2 block" aria-label="breadcrumb">
        <ol class="flex flex-wrap text-slate-700 text-sm">

            @foreach ($breadcrumbs as $breadcrumb)
                <li class="items-center">
                    
                    {{-- Añade el separador (slash) si NO es el primer elemento --}}
                    @unless ($loop->first)
                        <span class="px-2 text-gray-400">/</span>
                    @endunless

                    {{-- Solo crea un enlace si tiene 'href' Y no es el último elemento. --}}
                    @if (isset($breadcrumb['href']) && !$loop->last)
                        <a href="{{ $breadcrumb['href'] }}" class="opacity-60 hover:opacity-100 transition">
                            {{ $breadcrumb['name'] ?? '' }} {{-- Seguridad --}}
                        </a>
                    
                    @else
                    {{-- Es el último elemento O NO tiene 'href', muéstralo como texto simple --}}
                        <span class="opacity-60">
                            {{-- ⭐ CORRECCIÓN CLAVE: El operador ?? evita el error Undefined array key "name" ⭐ --}}
                            {{ $breadcrumb['name'] ?? '' }} 
                        </span>
                    @endif

                </li>
            @endforeach

        </ol>
    </nav>
@endif