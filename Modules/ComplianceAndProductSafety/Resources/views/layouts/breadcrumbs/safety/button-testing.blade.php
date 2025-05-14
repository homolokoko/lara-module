<div class="text-sm breadcrumbs">
    <ul>
        <li>
            <a
                href="{{ route('complianceandproductsafety::safety.button-testing.setup') }}"
                class="{{ request()->routeIs('complianceandproductsafety::safety.button-testing.setup') ? 'text-blue-500':'' }}"> Setup </a>
        </li>
        <li>
          <a
                href="{{ route('complianceandproductsafety::safety.button-testing.report') }}"
                class="{{ request()->routeIs('complianceandproductsafety::safety.button-testing.report') ? 'text-blue-500':'' }}"> Report </a>
        </li>
        <li>
            <a
                href="{{ route('complianceandproductsafety::safety.button-testing.inspector') }}"
                class="{{ request()->routeIs('complianceandproductsafety::safety.button-testing.inspector') ? 'text-blue-500':'' }}"> Inspector </a>
        </li>
    </ul>
  </div>
