<ul class="p-3 min-h-full bg-white shadow-lg rounded-2xl sticky top-0">

    <li class="font-bold text-lg">
        Blade Ui
        <ul class="px-3">
            <li class="font-semibold text-sm">
                <a class="{{ request()->routeIs('blade-ui.hero-icon') ? 'text-blue-500':''  }}" href="{{route('blade-ui.hero-icon')}}"> Hero Icon</a>
            </li>
        </ul>
    </li>

    <li class="font-bold text-lg">
        Menu
        <ul class="px-3">
            <li class="font-semibold text-sm">
                <a class="{{ request()->routeIs('admin.symmetric.page') ? 'text-blue-500':''  }}" href="{{route('admin.symmetric.page')}}"> Symmetric </a>
            </li>
        </ul>
    </li>

</ul>
