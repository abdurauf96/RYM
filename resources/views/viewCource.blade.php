@extends('layouts.index')

@section('breadcrumb')
<div class="header-pages" style="background-image: url('/images/pages-bg.png');">
    <h1 class="header-pages-title">{{ $course->getTranslatedAttribute('title', \App::getLocale()) }}</h1>
</div>
@endsection

@section('content')
    <!--Main
        ==================================-->
        <div class="rym-container">
            <div class="togarak-page">
                <div class="togarak-page-top">
                    <div class="togarak-page-top-info">
                        <h5 class="togarak-page-top-title">To’garak tashkil etildi</h5>
                        <div class="togarak-page-top-date">{{ $course->created_date->format('d.m.Y') }}</div>
                        <div class="togarak-page-top-loc">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0)">
                                    <path
                                        d="M17.5 8.33334C17.5 14.1667 10 19.1667 10 19.1667C10 19.1667 2.5 14.1667 2.5 8.33334C2.5 6.34422 3.29018 4.43656 4.6967 3.03004C6.10322 1.62352 8.01088 0.833344 10 0.833344C11.9891 0.833344 13.8968 1.62352 15.3033 3.03004C16.7098 4.43656 17.5 6.34422 17.5 8.33334Z"
                                        stroke="#009746" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M10 10.8334C11.3807 10.8334 12.5 9.71409 12.5 8.33337C12.5 6.95266 11.3807 5.83337 10 5.83337C8.61929 5.83337 7.5 6.95266 7.5 8.33337C7.5 9.71409 8.61929 10.8334 10 10.8334Z"
                                        stroke="#009746" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </g>
                                <defs>
                                    <clipPath id="clip0">
                                        <rect width="20" height="20" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            {{ $course->region->getTranslatedAttribute('name', \App::getLocale()) }}
                        </div>
                    </div>
                    <button class="togarak-page-top-btn togarakModal">Ariza yuborish</button>
                </div>
                <div class="togarak-page-phrase">
                    {!! $course->getTranslatedAttribute('advantages', \App::getLocale()) !!}
                    
                </div>
                @if ($course->images)
                <div class="togarak-page-img-block">
                    @php $images=json_decode($course->images) @endphp
                    @foreach ($images as $image)
                    <div class="togarak-page-img-item">
                        <img src="{{ Voyager::image($image) }}" alt="">
                    </div>
                    @endforeach  
                </div>
                @endif
                <div class="togarak-page-middle-info">
                    {!! $course->getTranslatedAttribute('body', \App::getLocale()) !!}
                </div>
                <div class="togarak-page-master">
                    <h4 class="togarak-page-master-title">Master-klass o`tkazuvchi
                    </h4>
                    <div class="togarak-page-master-block">
                        <div class="togarak-page-master-img">
                            <img src="{{ Voyager::image($course->teacher_photo) }}" alt="">
                        </div>
                        <div class="togarak-page-master-info">
                            <h5 class="togarak-page-master-info-name">{{ $course->getTranslatedAttribute('teacher_name', \App::getLocale()) }}</h5>
                            <div class="togarak-page-master-info-pos">{{ $course->getTranslatedAttribute('teacher_position', \App::getLocale()) }}</div>
                            <div class="togarak-page-master-info-text">{{ $course->getTranslatedAttribute('teacher_about', \App::getLocale()) }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('sections.cources-modal')
@endsection