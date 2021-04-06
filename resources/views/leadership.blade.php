@extends('layouts.index')

@section('breadcrumb')
<div class="header-pages" style="background-image: url('./images/pages-bg.png');">
    <h1 class="header-pages-title">{{ $leaderPage->getTranslatedAttribute('title', \App::getLocale()) }}</h1>
</div>
@endsection

@section('content')
    <!--Main
        ==================================-->
    <div class="rahbariyat">
        <div class="rym-container">
            @foreach ($leaders as $lead)
            <div class="rahbariyat-wrap @if(!$loop->first) mt-4 @endif">
                <div class="rahbariyat-block">
                    <div class="rahbariyat-img">
                        <img src="{{ Voyager::image($lead->image) }}" alt="">
                    </div>
                    <div class="rahbariyat-info">
                        <h3 class="rahbariyat-info-title">{{ $lead->getTranslatedAttribute('name', \App::getLocale()) }}</h3>
                        <div class="rahbariyat-info-address">{{ $lead->getTranslatedAttribute('position', \App::getLocale()) }}</div>
                        <div class="rahbariyat-info-email d-f align-items-center">
                            <svg width="35" height="35" viewBox="0 0 35 35" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M5.83366 5.83337H29.167C30.7712 5.83337 32.0837 7.14587 32.0837 8.75004V26.25C32.0837 27.8542 30.7712 29.1667 29.167 29.1667H5.83366C4.22949 29.1667 2.91699 27.8542 2.91699 26.25V8.75004C2.91699 7.14587 4.22949 5.83337 5.83366 5.83337Z"
                                    stroke="#4F4F4F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M32.0837 8.75L17.5003 18.9583L2.91699 8.75" stroke="#4F4F4F" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <p class="rahbariyat-info-email-title">{{ $lead->email }}</p>
                        </div>
                        <div class="rahbariyat-info-text">@lang('messages.phone').: {{ $lead->phone }}</div>
                        <div class="rahabriyat-time-block align-items-center d-f justify-content-between">
                            <div class="rahbariyat-info-text">{{ $lead->getTranslatedAttribute('work_time', \App::getLocale()) }}</div>
                            <button type="button" class="rahbariyat-info-btn">@lang('messages.hol')</button>
                        </div>
                    </div>
                </div>
                <div class="rahbariyat-report">
                    <div class="rahbariyat-report-info">
                        {!! $lead->getTranslatedAttribute('body', \App::getLocale()) !!}
                    </div>
                    <div class="d-f justify-content-end">
                        <div class="rahbariyat-report-btn">@lang('messages.back')</div>
                    </div>
                </div>
            </div> 
            @endforeach
        </div>
    </div>
@endsection