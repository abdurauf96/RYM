<div class="news-page">
    <div class="news-page-search">
        
        <input type="text" wire:model="q" class="news-page-search-input" placeholder="Search topics">
    </div>
    <div class="rym-container">
        <div class="news-page-title-block">
            <h2 class="title">@lang('messages.news')</h2>
            <div class="news-page-filter">
                <select name="choose" wire:change="sortNews($event.target.value)" data-placeholder="Filtrlash" class="custom-select">
                    <option value="new">@lang('messages.new')</option>
                    <option value="old">@lang('messages.old')</option>
                    <option value="best">@lang('messages.top')</option>
                </select>
            </div>
        </div>
        <div class="news-page-block">
            
            @foreach ($newss as $item)
            <div class="news-page-item">
                <div class="news-slider-item">
                    <div class="news-slider-img news-page-img">
                        <img src="{{ Voyager::image($item->image_view) }}" alt="">
                        <p class="news-page-badge">{{ $item->category->getTranslatedAttribute('name', \App::getLocale()) }}</p>
                    </div>
                    <div class="news-page-date-block">
                        <p class="news-page-date">{{ $item->created_at->format('d-M Y')}}</p>
                        <p class="news-page-date">{{ $item->created_at->format('h:i') }}</p>
                    </div>
                    <div class="news-slider-title news-page-title">{{ $item->getTranslatedAttribute('title', \App::getLocale()) }}
                    </div>
                    <!-- <p class="news-slider-date">Noyabr 12</p> -->
                    <div class="news-slider-text news-page-text">{{ $item->getTranslatedAttribute('description', \App::getLocale()) }}</div>
                    <div class="news-page-link-wrap">
                        <a href="{{ route('viewNews', $item->slug) }}" class="news-slider-link news-page-link">@lang('messages.more')</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="news-page-paginate">
            {{ $newss->links('layouts.pagination') }}
        </div>
    </div>
</div>