<div class="rym-container">
    @foreach ($documents as $doc)
    <div class="documents-block">
        <div class="documents-img">
            <img src="{{ Voyager::image($doc->image) }}" alt="">
        </div>
        <div class="documents-info">
            <h6 class="documents-title">{{ $doc->getTranslatedAttribute('title', \App::getLocale()) }}
            </h6>
            <div class="documents-icon-block">
                <div class="documents-icon-item">
                    <p><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M19 4H5C3.89543 4 3 4.89543 3 6V20C3 21.1046 3.89543 22 5 22H19C20.1046 22 21 21.1046 21 20V6C21 4.89543 20.1046 4 19 4Z"
                                stroke="#009746" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M16 2V6" stroke="#009746" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M8 2V6" stroke="#009746" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M3 10H21" stroke="#009746" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </p>
                    {{ $doc->created_at->format('d.m.Y') }}
                </div>
                <div class="documents-icon-item">
                    <p><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 12C1 12 5 4 12 4C19 4 23 12 23 12C23 12 19 20 12 20C5 20 1 12 1 12Z"
                                stroke="#009746" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z"
                                stroke="#009746" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>

                    </p>
                    {{ $doc->viewed }}
                </div>
                <div class="documents-icon-item">
                    <p><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M21 15V19C21 19.5304 20.7893 20.0391 20.4142 20.4142C20.0391 20.7893 19.5304 21 19 21H5C4.46957 21 3.96086 20.7893 3.58579 20.4142C3.21071 20.0391 3 19.5304 3 19V15"
                                stroke="#009746" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M7 10L12 15L17 10" stroke="#009746" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M12 15V3" stroke="#009746" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </p>
                    {{ $doc->downloaded }}
                </div>
            </div>
        </div>
        <a href="{{ route('viewDocument', $doc->slug) }}" class="documents-read">O’qish</a>
        
        @if($doc->file!='[]')
            @php
                $file=json_decode($doc->file)[0];
            @endphp
        <a class="documents-btn" href="{{ Voyager::image($file->download_link) }}" wire:click="download({{ $doc->id }})">
            Yuklab olish
        </a>
       
        @endif
    </div>  
    @endforeach
</div>