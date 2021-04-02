
@foreach($items as $menu)
<li class="header-nav-menu-item">
    <a href="{{ $menu->url }}" class="header-nav-menu-link">
        {{ $menu->getTranslatedAttribute('title', \App::getLocale()) }}
        <svg width="16" height="10" viewBox="0 0 16 10" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
                d="M15.9365 1.5835L7.96845 9.54083L0.0644531 1.62723L1.18872 0.504029L7.96952 7.29443L14.8143 0.459229L15.9365 1.5835Z"
                fill="#EBE5DB" />
        </svg>
    </a>
</li>
@endforeach
