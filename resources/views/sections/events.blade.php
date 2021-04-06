<div class="events">
    <div class="rym-container">
        <h2 class="title">@lang('messages.events')</h2>
        <div class="events-block">
            @foreach ($events as $event)
            <a href="{{ route('viewEvent', $event->slug) }}" class="events-item">
                <div class="events-img">
                    <img src="{{ Voyager::image($event->image_view) }}" alt="">
                    <div class="events-badge">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M19 4H5C3.89543 4 3 4.89543 3 6V20C3 21.1046 3.89543 22 5 22H19C20.1046 22 21 21.1046 21 20V6C21 4.89543 20.1046 4 19 4Z"
                                stroke="#009746" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M16 2V6" stroke="#009746" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M8 2V6" stroke="#009746" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M3 10H21" stroke="#009746" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                        <p class="events-badge-text">{{ $event->created_at->format('d.m.Y') }}</p>

                        <svg class="ml-2" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12 19C15.866 19 19 15.866 19 12C19 8.13401 15.866 5 12 5C8.13401 5 5 8.13401 5 12C5 15.866 8.13401 19 12 19Z"
                                stroke="#009746" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M12 9V12L13.5 13.5" stroke="#009746" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M7.49047 6.65002L7.84047 2.82002C7.88537 2.32309 8.1144 1.8609 8.48258 1.52417C8.85077 1.18744 9.33152 1.00049 9.83047 1.00002H14.1805C14.6811 0.997985 15.1644 1.18381 15.5347 1.52079C15.905 1.85776 16.1354 2.32137 16.1805 2.82002L16.5305 6.65002M16.5105 17.35L16.1605 21.18C16.1154 21.6787 15.885 22.1423 15.5147 22.4792C15.1444 22.8162 14.6611 23.002 14.1605 23H9.83047C9.3298 23.002 8.84657 22.8162 8.47627 22.4792C8.10597 22.1423 7.87553 21.6787 7.83047 21.18L7.48047 17.35L9.83047 19H14.1605L16.5105 17.35Z"
                                stroke="#009746" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <p class="events-badge-text">{{ $event->created_at->format('h:m') }}</p>
                    </div>
                </div>
                <div class="events-name">{{ $event->getTranslatedAttribute('category', \App::getLocale()) }}</div>
                <div class="events-title">{{ $event->getTranslatedAttribute('title', \App::getLocale()) }}</div>
                <div class="events-text">{{ $event->getTranslatedAttribute('description', \App::getLocale()) }}</div>
            </a> 
            @endforeach
        </div>

        @include('sections.subscribe')
    </div>
</div>