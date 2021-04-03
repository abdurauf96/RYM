<div class="teacher">
    <div class="rym-container">
        <div class="teacher-block">
            <div class="teacher-info">
                <div class="teacher-opinion">{{ $opinion->getTranslatedAttribute('title', \App::getLocale()) }}</div>
                <h2 class="teacher-title f-bold">{{ $opinion->getTranslatedAttribute('description', \App::getLocale()) }}</h2>
                <div class="teacher-text">
                    {{ $opinion->getTranslatedAttribute('body', \App::getLocale()) }}
                </div>
                <div class="teacher-name">{{ $opinion->getTranslatedAttribute('author', \App::getLocale()) }}</div>
            </div>
            <div class="teacher-img">
                <img src="{{ Voyager::image($opinion->image) }}" alt="">
                <span></span>
            </div>
        </div>
    </div>
</div>