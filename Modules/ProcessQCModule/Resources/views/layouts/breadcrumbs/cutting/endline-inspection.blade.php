<div class="text-sm breadcrumbs">
    <ul>
        <li>
            <a
                href="{{ route('processqcmodule::cutting.endline-inspection.endline-cutting') }}"
                class="{{ request()->routeIs('processqcmodule::cutting.endline-inspection.endline-cutting') ? 'text-blue-500':'' }}">Endline Cutting</a>
        </li>
        <li>
          <a
                href="{{ route('processqcmodule::cutting.endline-inspection.fabric-inspection') }}"
                class="{{ request()->routeIs('processqcmodule::cutting.endline-inspection.fabric-inspection') ? 'text-blue-500':'' }}">Fabric Inspection</a>
        </li>
    </ul>
  </div>
