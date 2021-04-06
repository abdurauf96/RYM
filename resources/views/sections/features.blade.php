<div class="advantages">
    <div class="rym-container">
        <h2 class="title t-a">@lang('messages.why')</h2>
        <div class="advantages-text">@lang('messages.we')</div>
        <div class="advantages-block">
            @foreach ($features as $feature)
            <div class="advantages-item">
                <div class="advantages-icon">
                    <img src="{{ Voyager::image($feature->icon) }}" alt="">
                </div>
                <div class="advantages-info">
                    <div class="advantages-info-title">
                        {{ $feature->getTranslatedAttribute('title', \App::getLocale()) }}
                    </div>
                    <div class="advantages-info-text">
                        {{ $feature->getTranslatedAttribute('body', \App::getLocale()) }}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</div>