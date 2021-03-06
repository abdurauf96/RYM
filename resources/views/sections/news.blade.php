<div class="news">
    <div class="rym-container">
        <div class="title t-a">@lang('messages.latest-news')</div>
        <div class="news-top-text">@lang('messages.news_block_description')</div>

        <div class="news-slider">
            @foreach ($news as $new)
            <div class="news-slider-item">
                <div class="news-slider-img">
                    <img src="{{ Voyager::image($new->image_view) }}" alt="">
                </div>
                <a href="{{ route('viewNews', $new->slug) }}" class="news-slider-title">{{ $new->getTranslatedAttribute('title', \App::getLocale()) }}</a>
                <p class="news-slider-date">{{ $new->created_at->format('d M') }}</p>
                <div class="news-slider-text">{{ $new->getTranslatedAttribute('description', \App::getLocale()) }}</div>
                <a href="{{ route('viewNews', $new->slug) }}" class="news-slider-link">@lang('messages.more')</a>
            </div>
            @endforeach
        </div>
        {{-- <div class="d-f justify-content-end">
            <a href="" class="news-slider-btn">Load More</a>
        </div> --}}
    </div>
</div>