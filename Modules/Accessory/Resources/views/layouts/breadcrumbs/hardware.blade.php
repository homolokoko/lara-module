<div class="text-sm breadcrumbs">
    <ul>
        <li>
            <a
                href="{{ route('accessory::hardware.testing') }}"
                class="{{ request()->routeIs('accessory::hardware.testing') ? 'text-blue-500':'' }}">Testing</a>
        </li>
        <li>
          <a
                href="{{ route('accessory::hardware.audit') }}"
                class="{{ request()->routeIs('accessory::hardware.audit') ? 'text-blue-500':'' }}">Audit</a>
        </li>
        <li>
            <a
                href="{{ route('accessory::hardware.approval') }}"
                class="{{ request()->routeIs('accessory::hardware.approval') ? 'text-blue-500':'' }}">Approval</a>
        </li>
        <li>
            <a
                href="{{ route('accessory::hardware.inspection') }}"
                class="{{ request()->routeIs('accessory::hardware.inspection') ? 'text-blue-500':'' }}">100% Inspection</a>
        </li>
    </ul>
  </div>
