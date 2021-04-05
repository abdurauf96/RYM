@extends('layouts.index')

@section('breadcrumb')
<div class="header-pages" style="background-image: url('./images/pages-bg.png');">
    <h1 class="header-pages-title">Videogalareya</h1>
</div>
@endsection

@section('content')
    <!--Main
        ==================================-->
    <div class="video">
        <div class="rym-container">
            @foreach ($videos as $video)
                
                <a href="{{ $video->link }}" data-fancybox="zoom-img" class="video-wrap-child">
                    <video class="zoom-fancybox" src="{{ $video->link }}"></video>
                </a>
                <div class="video-wrap-text-block">
                    <div class="video-wrap-title">{{ $video->getTranslatedAttribute('title', \App::getLocale()) }}
                    </div>
                    <div class="video-wrap-text text">{{ $video->getTranslatedAttribute('description', \App::getLocale()) }}
                    </div>
                </div>
                
                @break
            @endforeach
            

            <div class="video-items-block">
                @foreach ($videos as $video)
                @if(!$loop->first)
                <div class="video-items-child">
                    <a href="{{ Voyager::image($video->image) }}" data-fancybox="zoom-img" class="video-items-child-video">
                        <video class="zoom-fancybox" src="{{ $video->link }}"></video>
                    </a>
                    <div class="video-wrap-text-block">
                        <div class="video-wrap-title">{{ $video->getTranslatedAttribute('title', \App::getLocale()) }}
                        </div>
                        <div class="video-wrap-text text">{{ $video->getTranslatedAttribute('description', \App::getLocale()) }}
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
                
            </div>
        </div>
    </div>
@endsection