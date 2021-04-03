<div class="rym-container">
    <div class="numbers-info">
        <div class="numbers-info-block">
            @foreach ($numbers as $number)
            <div class="numbers-info-item">
                <div class="numbers-info-img">
                    <img src="{{ Voyager::image($number->icon) }}" alt="">
                </div>
                <div class="numbers-info-number"><span>{{ $number->number }}</span></div>
                <div class="numbers-info-title">{{ $number->getTranslatedAttribute('title', \App::getLocale()) }}</div>
            </div>
            @endforeach
        </div>
    </div>
</div>