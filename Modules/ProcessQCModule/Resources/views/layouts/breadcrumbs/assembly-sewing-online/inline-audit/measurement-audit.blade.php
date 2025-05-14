<div class="text-sm breadcrumbs">
    <ul>
        <li>
            <a
                href="{{ route('processqcmodule::assembly/sewing-online.inline-audit.measurement-audit.setup') }}"
                class="btn btn-xs {{ request()->routeIs('processqcmodule::assembly/sewing-online.inline-audit.measurement-audit.setup') ? 'btn-primary':'btn-ghost' }}">Seup</a>
        </li>
        <li>
          <a
                href="{{ route('processqcmodule::assembly/sewing-online.inline-audit.measurement-audit.inspector') }}"
                class="btn btn-xs {{ request()->routeIs('processqcmodule::assembly/sewing-online.inline-audit.measurement-audit.inspector') ? 'btn-primary':'btn-ghost' }}">Inspector</a>
        </li>

        <li>
          <a
                href="{{ route('processqcmodule::assembly/sewing-online.inline-audit.measurement-audit.report') }}"
                class="btn btn-xs {{ request()->routeIs('processqcmodule::assembly/sewing-online.inline-audit.measurement-audit.report') ? 'btn-primary':'btn-ghost' }}">Report</a>
        </li>
    </ul>
  </div>
