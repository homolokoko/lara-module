<div class="flex text-sm items-center space-x-2 font-semibold p-2 {{ request()->routeIs('processqcmodule::assembly/sewing-online.inline-audit.*') ? 'text-blue-700':'' }}">
    @if(request()->routeIs('processqcmodule::assembly/sewing-online.inline-audit.*'))
    <x-heroicon-o-folder-open class="w-5 h-5" />
    @else
    <x-heroicon-o-folder class="w-5 h-5" />
    @endif
    <h3> Inline Audit  </a>
</div>
<ul class="px-5">
    <li>
        <a
            href="{{ route('processqcmodule::assembly/sewing-online.inline-audit.inline') }}"
            class=" btn btn-xs btn-ghost {{ request()->routeIs('processqcmodule::assembly/sewing-online.inline-audit.inline.*') ? 'btn-link':'btn-ghost' }}">
            <x-heroicon-o-play class="w-5 h-5" />Inline
        </a>
    </li>
    <li>
        <a
            href="{{ route('processqcmodule::assembly/sewing-online.inline-audit.measurement-audit') }}"
            class=" btn btn-xs btn-ghost {{ request()->routeIs('processqcmodule::assembly/sewing-online.inline-audit.measurement-audit.*') ? 'btn-link':'btn-ghost' }}">
            <x-heroicon-o-play class="w-5 h-5" />Measurement Audit
        </a>
    </li>
    <li>
        <a
            href="{{ route('processqcmodule::assembly/sewing-online.inline-audit.measurement-audit') }}"
            class=" btn btn-xs btn-ghost {{ request()->routeIs('processqcmodule::assembly/sewing-online.inline-audit.measurement-audit.*') ? 'btn-link':'btn-ghost' }}">
            <x-heroicon-o-play class="w-5 h-5" />First Bulk
        </a>
    </li>
</ul>
