@extends('layouts.index')

@section('breadcrumb')
<div class="header-pages" style="background-image: url('./images/pages-bg.png');">
    <h1 class="header-pages-title">{{ $oavPage->getTranslatedAttribute('title', \App::getLocale()) }}</h1>
</div>
@endsection

@section('content')
    <!--Main
        ==================================-->
    <div class="documents">
        <div class="rym-container">
            @foreach ($oavs as $oav)
            <div class="documents-block">
                <div class="documents-img">
                    <img src="{{ Voyager::image($oav->image_view) }}" alt="">
                </div>
                <div class="documents-info">
                    <h6 class="documents-title">{{$oav->getTranslatedAttribute('title', \App::getLocale())}}
                    </h6>
                    <div class="documents-icon-block">
                        <div class="documents-icon-item">
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
                            {{ $oav->created_at->format('d.m.Y') }}
                        </div>
                    </div>
                </div>
                <a href="{{ route('viewOav', $oav->slug) }}" class="documents-btn">@lang('messages.read')</a>
                <!-- <button type="button" class="documents-btn">Yuklab olish</button> -->
            </div> 
            @endforeach
           
        </div>
    </div>
@endsection