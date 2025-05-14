<div class="text-sm breadcrumbs">
    <ul>
        <li>
            <a
                href="{{ route('processqcmodule::assembly/sewing-online.inline-audit.inline.setup') }}"
                class="btn btn-xs {{ request()->routeIs('processqcmodule::assembly/sewing-online.inline-audit.inline.setup') ? 'btn-primary':'btn-ghost' }}">Seup</a>
        </li>
        <li>
          <a
                href="{{ route('processqcmodule::assembly/sewing-online.inline-audit.inline.inspector') }}"
                class="btn btn-xs {{ request()->routeIs('processqcmodule::assembly/sewing-online.inline-audit.inline.inspector') ? 'btn-primary':'btn-ghost' }}">Inspector</a>
        </li>

        <li>
          <a
                href="{{ route('processqcmodule::assembly/sewing-online.inline-audit.inline.report') }}"
                class="btn btn-xs {{ request()->routeIs('processqcmodule::assembly/sewing-online.inline-audit.inline.report') ? 'btn-primary':'btn-ghost' }}">Report</a>
        </li>
    </ul>
  </div>
