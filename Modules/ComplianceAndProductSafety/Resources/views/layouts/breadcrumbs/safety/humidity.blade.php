<div class="text-sm breadcrumbs">
    <ul>
        <li>
            <a
                href="{{ route('complianceandproductsafety::safety.humidity.setup') }}"
                class="{{ request()->routeIs('complianceandproductsafety::safety.humidity.setup') ? 'text-blue-500':'' }}"> Setup </a>
        </li>
        <li>
          <a
                href="{{ route('complianceandproductsafety::safety.humidity.report') }}"
                class="{{ request()->routeIs('complianceandproductsafety::safety.humidity.report') ? 'text-blue-500':'' }}"> Report </a>
        </li>
        <li>
            <a
                href="{{ route('complianceandproductsafety::safety.humidity.inspector') }}"
                class="{{ request()->routeIs('complianceandproductsafety::safety.humidity.inspector') ? 'text-blue-500':'' }}"> Inspector </a>
        </li>
    </ul>
  </div>
