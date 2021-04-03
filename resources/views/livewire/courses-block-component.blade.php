<div class="togarak">
    <div class="rym-container">
        <div class="title">To‘garaklar</div>
        <div class="togarak-select-block">
            <div class="togarak-select-wrap">
                <select name="choose" wire:change="sortByRegion($event.target.value)"  data-placeholder="Viloyat" class="custom-select">
                    <option value="">Viloyat</option>
                    @foreach ($regions as $region)
                    <option   value="{{ $region->id }}">{{ $region->getTranslatedAttribute('name', \App::getLocale()) }}</option>
                    @endforeach
                </select>
            </div>
            <div class="togarak-select-wrap">
                <select name="choose" wire:change="sortByDistrict($event.target.value)" data-placeholder="Tuman" class="custom-select">
                    <option value="">Tuman</option>
                    @foreach ($districts as $district)
                    <option value="{{ $district->id }}">{{ $district->getTranslatedAttribute('name', \App::getLocale()) }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="togarak-block">
            @foreach ($courses as $course)
        <div class="togarak-item d-f justify-content-between align-items-center">
            <div class="togarak-info-block">
                <div class="d-f align-items-center">
                    <div class="togarak-info-img">
                        <img src="{{ Voyager::image($course->image_preview) }}" alt="">
                    </div>
                    <div class="togarak-info-item">
                        <div class="togarak-info-name">{{ $course->getTranslatedAttribute('title', \App::getLocale()) }}</div>
                        <div class="togarak-info-title"><span>O’qituvchi</span> {{ $course->getTranslatedAttribute('teacher_name', \App::getLocale()) }}
                        </div>
                        <div class="togarak-info-text">{{ $course->getTranslatedAttribute('description', \App::getLocale()) }}</div>
                        <a href="" class="cources-slider-info-loc togarak-info-loc">
                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0)">
                                    <path
                                        d="M17.5 9.12872C17.5 14.8843 10 19.8176 10 19.8176C10 19.8176 2.5 14.8843 2.5 9.12872C2.5 7.16611 3.29018 5.28389 4.6967 3.89612C6.10322 2.50835 8.01088 1.72871 10 1.72871C11.9891 1.72871 13.8968 2.50835 15.3033 3.89612C16.7098 5.28389 17.5 7.16611 17.5 9.12872Z"
                                        stroke="#009746" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M10 11.5954C11.3807 11.5954 12.5 10.491 12.5 9.12872C12.5 7.76641 11.3807 6.66205 10 6.66205C8.61929 6.66205 7.5 7.76641 7.5 9.12872C7.5 10.491 8.61929 11.5954 10 11.5954Z"
                                        stroke="#009746" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </g>
                                <defs>
                                    <clipPath id="clip0">
                                        <rect width="20" height="19.7333" fill="white"
                                            transform="translate(0 0.906494)" />
                                    </clipPath>
                                </defs>
                            </svg>
                            {{ $course->region->getTranslatedAttribute('name', \App::getLocale()) }}
                        </a>
                    </div>
                    <div class="togarak-links d-f flex-column">
                        <a class="cources-slider-link-member togarak-link togarakModal">A’zo bo’lish</a>
                        <a href="{{ route('viewCource', $course->slug) }}" class="cources-slider-link-member togarak-link mt-l">Batafsil</a>
                    </div>
                </div>
            </div>

        </div> 
        @endforeach
        </div>
        <a href="#" wire:click.prevent="loadMore" class="togarak-btn">Ko’proq</a>
    </div>
</div>