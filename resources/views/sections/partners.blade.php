<div class="clients clients-main">
    <div class="clients-title">@lang('messages.partners')</div>
    <div class="rym-container">
        <div class="clients-slider">
            @foreach ($partners as $partner)
            <div class="clients-slider-item">
                <a href="{{ $partner->link ? $partner->link : '#'  }}" target="_blank">
                    <img src="{{ Voyager::image($partner->image) }}" alt="">
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>