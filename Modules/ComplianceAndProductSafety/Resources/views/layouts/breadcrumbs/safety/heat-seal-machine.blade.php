<div class="text-sm breadcrumbs">
    <ul>
        <li>
            <a
                href="{{ route('complianceandproductsafety::safety.heat-seal-machine.setup') }}"
                class="btn btn-xs {{ request()->routeIs('complianceandproductsafety::safety.heat-seal-machine.setup') ? 'btn-primary':'btn-ghost' }}"> Setup </a>
        </li>
        <li>
            <a
                href="{{ route('complianceandproductsafety::safety.heat-seal-machine.inspector') }}"
                class="btn btn-xs {{ request()->routeIs('complianceandproductsafety::safety.heat-seal-machine.inspector') ? 'btn-primary':'btn-ghost' }}"> Inspector </a>
        </li>
        <li>
          <a
                href="{{ route('complianceandproductsafety::safety.heat-seal-machine.report') }}"
                class="btn btn-xs {{ request()->routeIs('complianceandproductsafety::safety.heat-seal-machine.report') ? 'btn-primary':'btn-ghost' }}"> Report </a>
        </li>
    </ul>
  </div>
