<div class="text-sm breadcrumbs">
    <ul>
        <li>
            <a
                href="{{ route('complianceandproductsafety::safety.checklist-of-compliance.setup') }}"
                class="{{ request()->routeIs('complianceandproductsafety::safety.checklist-of-compliance.setup') ? 'text-blue-500':'' }}"> Setup </a>
        </li>
        <li>
          <a
                href="{{ route('complianceandproductsafety::safety.checklist-of-compliance.report') }}"
                class="{{ request()->routeIs('complianceandproductsafety::safety.checklist-of-compliance.report') ? 'text-blue-500':'' }}"> Report </a>
        </li>
        <li>
            <a
                href="{{ route('complianceandproductsafety::safety.checklist-of-compliance.inspector') }}"
                class="{{ request()->routeIs('complianceandproductsafety::safety.checklist-of-compliance.inspector') ? 'text-blue-500':'' }}"> Inspector </a>
        </li>
    </ul>
  </div>
