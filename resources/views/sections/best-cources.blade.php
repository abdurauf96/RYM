<div class="cources" style="background-image: url(./images/girls.png);">
    <div class="cources-slider-wrap">
        <div class="cources-slider">
            @foreach ($best_courses as $course)
            <div class="cources-slider-item">
                <h3 class="cources-slider-title">Eng yaxshi to‘garaklar</h3>
                <div class="cources-slider-info-block d-f justify-content-between align-items-center mt-1">
                    <div class="cources-slider-info">
                        <div class="cources-slider-img">
                            <img src="{{ Voyager::image($course->image_preview) }}" alt="">
                        </div>
                        <div class="cources-slider-info-item">
                            <div class="cources-slider-info-title">
                                {{ $course->getTranslatedAttribute('title', \App::getLocale()) }}</div>
                            <div class="cources-slider-info-name">{{ $course->getTranslatedAttribute('teacher_name', \App::getLocale()) }}</div>
                            <a href="" class="cources-slider-info-loc">
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
                    </div>
                    <div class="cources-slider-link mt-1">
                        <a href="{{ route('viewCource', $course->slug) }}" class="cources-slider-link-data">Batafsil</a>
                        <a href="#" class="cources-slider-link-member togarakModal" data-course="{{ $course->getTranslatedAttribute('title', \App::getLocale()) }}">A’zo bo’lish</a>
                    </div>
                </div>
            </div>
            @endforeach
            
            
        </div>
    </div>
</div>