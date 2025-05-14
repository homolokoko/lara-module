<div class="text-sm breadcrumbs">
    <ul>
        <li>
            <a
                href="{{ route('accessory::packing-material.testing') }}"
                class="{{ request()->routeIs('accessory::packing-material.testing') ? 'text-blue-500':'' }}">Testing</a>
        </li>
        <li>
          <a
                href="{{ route('accessory::packing-material.audit') }}"
                class="{{ request()->routeIs('accessory::packing-material.audit') ? 'text-blue-500':'' }}">Audit</a>
        </li>
        <li>
            <a
                href="{{ route('accessory::packing-material.approval') }}"
                class="{{ request()->routeIs('accessory::packing-material.approval') ? 'text-blue-500':'' }}">Approval</a>
        </li>
        <li>
            <a
                href="{{ route('accessory::packing-material.inspection') }}"
                class="{{ request()->routeIs('accessory::packing-material.inspection') ? 'text-blue-500':'' }}">100% Inspection</a>
        </li>
    </ul>
  </div>
