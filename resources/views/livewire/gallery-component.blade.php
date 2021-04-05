<div class="gallery">
    <div class="rym-container">
        <div class="news-page-title-block">
            <h2 class="title"></h2>
            <div class="news-page-filter">
                <select name="choose" wire:change="sortImages($event.target.value)" data-placeholder="Filtrlash" class="custom-select">
                    <option value="new">Eng yangi</option>
                    <option value="old">Eng eski</option>
                    <option value="best">Ommabop</option>
                </select>
            </div>
        </div>
        <div class="rym-row">
            @foreach ($images as $image)
            @php
                $decoded_images=json_decode($image->images)
            @endphp
            {{-- @foreach ($decoded_images as $item) --}}
            <a href="{{ Voyager::image($decoded_images[0]) }}" data-fancybox="zoom-img" class="gallery-item">
                <div class="item-ratio">
                    <div class="item-ratio-content">
                        <div class="gallery-img">
                            <img class="zoom-img" src="{{ Voyager::image($decoded_images[0]) }}" alt="">
                        </div>
                        
                        <div class="gallery-top">
                            <div class="gallery-date">{{ $image->created_at->format('d.m.Y') }}</div>
                            <div class="gallery-date">{{ count($decoded_images) }} rasm</div>
                        </div>
                        <div class="gallery-text">{{ $image->getTranslatedAttribute('title', \App::getLocale()) }}</div>
                    </div>
                </div>
            </a>
            
            {{-- @endforeach --}}
            
            @endforeach

        </div>

        <div class="news-page-paginate">
            {{ $images->links('layouts.pagination') }}
        </div>
    </div>
</div>