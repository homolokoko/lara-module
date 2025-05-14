<div class="text-sm breadcrumbs">
    <ul>
        <li>
            <a
                href="{{ route('accessory::sewing-trim.testing') }}"
                class="{{ request()->routeIs('accessory::sewing-trim.testing') ? 'text-blue-500':'' }}">Testing</a>
        </li>
        <li>
          <a
                href="{{ route('accessory::sewing-trim.audit') }}"
                class="{{ request()->routeIs('accessory::sewing-trim.audit') ? 'text-blue-500':'' }}">Audit</a>
        </li>
        <li>
            <a
                href="{{ route('accessory::sewing-trim.approval') }}"
                class="{{ request()->routeIs('accessory::sewing-trim.approval') ? 'text-blue-500':'' }}">Approval</a>
        </li>
        <li>
            <a
                href="{{ route('accessory::sewing-trim.inspection') }}"
                class="{{ request()->routeIs('accessory::sewing-trim.inspection') ? 'text-blue-500':'' }}">100% Inspection</a>
        </li>
    </ul>
  </div>
