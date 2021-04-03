<div class="rym-container">
    <div class="own-events">
        <div class="own-events-name">{{ $offer->getTranslatedAttribute('title', \App::getLocale()) }}</div>
        <div class="title t-a">{{ $offer->getTranslatedAttribute('description', \App::getLocale()) }}</div>
        <div class="own-events-text">{{ $offer->getTranslatedAttribute('body', \App::getLocale()) }}</div>
    </div>
</div>