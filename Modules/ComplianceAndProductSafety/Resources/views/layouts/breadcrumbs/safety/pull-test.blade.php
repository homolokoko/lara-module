<div class="text-sm breadcrumbs">
    <ul>
        <li>
            <a
                href="{{ route('complianceandproductsafety::safety.pull-test.setup') }}"
                class="{{ request()->routeIs('complianceandproductsafety::safety.pull-test.setup') ? 'text-blue-500':'' }}"> Setup </a>
        </li>
        <li>
          <a
                href="{{ route('complianceandproductsafety::safety.pull-test.report') }}"
                class="{{ request()->routeIs('complianceandproductsafety::safety.pull-test.report') ? 'text-blue-500':'' }}"> Report </a>
        </li>
        <li>
            <a
                href="{{ route('complianceandproductsafety::safety.pull-test.inspector') }}"
                class="{{ request()->routeIs('complianceandproductsafety::safety.pull-test.inspector') ? 'text-blue-500':'' }}"> Inspector </a>
        </li>
    </ul>
  </div>
