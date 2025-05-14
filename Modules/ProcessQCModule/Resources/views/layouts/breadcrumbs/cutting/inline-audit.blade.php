<div class="text-sm breadcrumbs">
    <ul>
        <li>
            <a
                href="{{ route('processqcmodule::cutting.inline-audit.inline-cutting') }}"
                class="{{ request()->routeIs('processqcmodule::cutting.inline-audit.inline-cutting') ? 'text-blue-500':'' }}">Inline Cutting</a>
        </li>
        <li>
          <a
                href="{{ route('processqcmodule::cutting.inline-audit.fabric-audit') }}"
                class="{{ request()->routeIs('processqcmodule::cutting.inline-audit.fabric-audit') ? 'text-blue-500':'' }}">Fabric Audit</a>
        </li>
    </ul>
  </div>
