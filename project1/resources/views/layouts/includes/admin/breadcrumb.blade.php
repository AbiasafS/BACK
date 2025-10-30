@if (count($breadcrumbs))
    <nav class="mb-2 block" aria-label="breadcrumb">
        <ol class="flex flex-wrap text-slate-700 text-sm">

            @foreach ($breadcrumbs as $breadcrumb)
                <li class="items-center">
                    
                    {{-- Añade el separador (slash) si NO es el primer elemento --}}
                    @unless ($loop->first)
                        <span class="px-2 text-gray-400">/</span>
                    @endunless

                    {{-- Si es el último elemento O no tiene 'href', muéstralo como texto --}}
                    @if ($loop->last || !isset($breadcrumb['href']))
                        <span class="opacity-60">
                            {{ $breadcrumb['name'] }}
                        </span>
                    @else
                    {{-- Si no es el último Y tiene 'href', muéstralo como enlace --}}
                        <a href="{{ $breadcrumb['href'] }}" class="opacity-60 hover:opacity-100 transition">
                            {{ $breadcrumb['name'] }}
                        </a>
                    @endif

                </li>
            @endforeach

        </ol>
        
        {{-- Esta parte probablemente debería ir fuera del primer @if, o eliminarse --}}
        {{-- @if(count($breadcrumbs)<1)
            <h6 class="font-bold mt-2">
                {{ end($breadcrumbs['name']) }}
            </h6>
        @endif --}}

    </nav>
@endif