@if (count($breadcrumbs))
    <nav class="mb-2 block" aria-label="breadcrumb">
        <ol class="flex flex-wrap text-slate-700 text-sm">

            @foreach ($breadcrumbs as $breadcrumb)
                <li class="items-center">
                    
                    {{-- ⭐ CORRECCIÓN: Añade el separador (slash) si NO es el primer elemento --}}
                    @unless ($loop->first)
                        <span class="px-2 text-gray-400">/</span>
                    @endunless

                    {{-- Solo crea un enlace si tiene 'href' Y no es el último elemento. --}}
                    @if (isset($breadcrumb['href']) && !$loop->last)
                        <a href="{{ $breadcrumb['href'] }}" class="opacity-60 hover:opacity-100 transition">
                            {{-- Se usa ?? '' por seguridad, para evitar errores si 'name' no existe --}}
                            {{ $breadcrumb['name'] ?? '' }}
                        </a>
                    
                    @else
                    {{-- Es el último elemento O NO tiene 'href', muéstralo como texto simple --}}
                        <span class="opacity-60">
                            {{ $breadcrumb['name'] ?? '' }} 
                        </span>
                    @endif

                </li>
            @endforeach

        </ol>
    </nav>
@endif