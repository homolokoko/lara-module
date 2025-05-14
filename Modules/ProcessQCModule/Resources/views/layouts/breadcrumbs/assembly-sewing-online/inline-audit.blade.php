<div class="text-sm breadcrumbs">
    <ul>
        <li>
            <a
                href="{{ route('processqcmodule::assembly/sewing-online.inline-audit.inline') }}"
                class="btn btn-xs {{ request()->routeIs('processqcmodule::assembly/sewing-online.inline-audit.inline') ? 'btn-primary':'btn-ghost' }}">Inline</a>
        </li>
        <li>
          <a
                href="{{ route('processqcmodule::assembly/sewing-online.inline-audit.measurement-audit') }}"
                class="btn btn-xs {{ request()->routeIs('processqcmodule::assembly/sewing-online.inline-audit.measurement-audit') ? 'btn-primary':'btn-ghost' }}">Measurement Audit</a>
        </li>

        <li>
          <a
                href="{{ route('processqcmodule::assembly/sewing-online.inline-audit.first-bulk') }}"
                class="btn btn-xs {{ request()->routeIs('processqcmodule::assembly/sewing-online.inline-audit.first-bulk') ? 'btn-primary':'btn-ghost' }}">First Bulk</a>
        </li>
    </ul>
  </div>
