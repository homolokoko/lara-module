<div class="flex flex-wrap gap-3 text-sm font-semibold tracking-wide capitalize">
    <a href="{{ route('blade-ui.hero-icon') }}" class="{{ request()->routeIs('blade-ui.hero-icon') ? 'text-white':'text-neutral-900' }}">hero icon</a>
    <a href="{{ route('client.photograph-upload') }}" class="{{ request()->routeIs('client.photograph-upload') ? 'text-white':'text-neutral-900' }}">photograph upload</a>
    <a href="{{ route('admin.product') }}" class="{{ request()->routeIs('admin.product') ? 'text-white':'text-neutral-900' }}">product</a>
</div>
