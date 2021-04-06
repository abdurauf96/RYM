@extends('layouts.index')

@section('breadcrumb')
<div class="header-pages" style="background-image: url('/images/pages-bg.png');">
    <h1 class="header-pages-title">{{ $district->region->getTranslatedAttribute('name', \App::getLocale()) }}</h1>
</div>
@endsection

@section('content')
    <!--Main
        ==================================-->
    <div class="hudud">
        <div class="rym-container">
            <div class="hudud-wrap">
                <div class="hudud-top-block hudud-in-top-parent">

                    {{-- <div class="hudud-select-wrap">
                        <select name="choose" data-placeholder="Navoi viloyat" class="custom-select">
                            <option value="0">Tashkent viloyat</option>
                            <option value="1">Samarqand viloyat</option>
                        </select>
                    </div> --}}
                    <div class="hudud-in-top-wrap">
                        <h4 class="hudud-top-title">{{ $district->region->getTranslatedAttribute('name', \App::getLocale()) }}</h4>

                        <p class="hudud-top-title-item">{{ $district->getTranslatedAttribute('name', \App::getLocale()) }}</p>
                    </div>
                </div>
                <div class="hudud-in-block">
                    @if ($district->images)
                        @php
                            $images=json_decode($district->images);
                        @endphp
                    <div class="hudud-in-slider">
                        @foreach ($images as $image)
                        <div class="hudud-in-slider-item">
                            <a href="{{ Voyager::image($image) }}" data-fancybox="zoom-img" class="hudud-in-slider-item-img">
                                <img class="zoom-img" src="{{ Voyager::image($image) }}" alt="">
                            </a>
                        </div>
                        @endforeach
                    </div>
                    @endif
                    
                    <div class="hudud-in-info">
                        <div class="hudud-in-info-item"><strong>@lang('messages.addres'):</strong>{{ $district->getTranslatedAttribute('addres', \App::getLocale()) }}
                        </div>
                        <a href="tel:{{ $district->phone }}" class="hudud-in-info-item"><strong>@lang('messages.tel'):</strong> {{ $district->phone }}
                        </a>
                        <div class="hudud-in-info-others">
                            {!! $district->getTranslatedAttribute('body', \App::getLocale()) !!}
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection