<div class="text-sm breadcrumbs">
    <ul>
        <li>
            <a
                href="{{ route('complianceandproductsafety::safety.fusing-machine.setup') }}"
                class="btn btn-xs {{ request()->routeIs('complianceandproductsafety::safety.fusing-machine.setup') ? 'btn-primary':'btn-info' }}"> Setup </a>
        </li>
        <li>
          <a
                href="{{ route('complianceandproductsafety::safety.fusing-machine.report') }}"
                class="btn btn-xs {{ request()->routeIs('complianceandproductsafety::safety.fusing-machine.report') ? 'btn-primary':'btn-info' }}"> Report </a>
        </li>
        <li>
            <a
                href="{{ route('complianceandproductsafety::safety.fusing-machine.inspector') }}"
                class="btn btn-xs {{ request()->routeIs('complianceandproductsafety::safety.fusing-machine.inspector') ? 'btn-primary':'btn-info' }}"> Inspector </a>
        </li>
    </ul>
  </div>
