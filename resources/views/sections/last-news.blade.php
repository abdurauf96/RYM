<div class="last-news">
    <div class="rym-container">
        <div class="last-news-title wh-col">So’nggi yangiliklar</div>
        <div class="last-news-block d-f justify-content-between">
            @foreach ($latest_news as $latest_new)
            <div class="last-news-item d-f align-items-center">
                <div class="last-news-date d-f flex-column align-items-center">
                    <strong>{{ $latest_new->created_at->format('d') }}</strong>
                    {{ $latest_new->created_at->format('M') }}
                </div>
                <div class="last-news-info">
                    <a href="{{ route('viewNews', $latest_new->slug) }}" class="last-news-info-title">{{ $latest_new->getTranslatedAttribute('title', \App::getLocale()) }}</a>
                    <p class="last-news-info-text">{{ $latest_new->getTranslatedAttribute('description', \App::getLocale()) }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>