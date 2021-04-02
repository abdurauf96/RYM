<div class="hero-slider">
    <div class="rym-container">
        <div class="header-slider">
            @foreach ($sliders as $slider)
            <div class="header-slider-item">
                <div class="header-slider-info">
                    <h2 class="header-slider-title f-bold">{{ $slider->getTranslatedAttribute('title', \App::getLocale()) }}</h2>
                    <div class="header-slider-text mt-1">{{ $slider->getTranslatedAttribute('description', \App::getLocale()) }}
                    </div>
                    <a href="{{ $slider->btn_link }}" class="header-slider-btn mt-2">{{ $slider->getTranslatedAttribute('btn_text', \App::getLocale()) }}</a>
                </div>
                <div class="header-slider-img">
                    <img src="{{ Voyager::image($slider->image) }}" alt="">
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>