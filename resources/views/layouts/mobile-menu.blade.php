@foreach($items as $menu)
<li class="mobile-menu-item">
    <a href="{{ $menu->url }}" class="mobile-menu-link">
        {{ $menu->getTranslatedAttribute('title', \App::getLocale()) }}</a>
</li>
@endforeach