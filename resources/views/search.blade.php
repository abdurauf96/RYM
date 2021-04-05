@extends('layouts.index')

@section('breadcrumb')
<div class="header-pages" style="background-image: url('./images/pages-bg.png');">
    <h1 class="header-pages-title">Qidiruv natijasi</h1>
    <p class="search-header-page">Sizning so’rovingiz bo‘yicha qidiruv natijalari: <strong>{{ $query }}</strong></p>
</div>
@endsection

@section('content')
    <!--Main
        ==================================-->
    <div class="search">
        <div class="rym-container">
            <div class="search-block">
                <div class="search-input-wrap">
                    <form action="/search" method="GET">
                        @csrf
                        <input class="search-input" name="q" placeholder="{{ $query }}" />
                    </form>
                </div>
                <div class="search-title">Sizning so’rovingiz bo‘yicha qidiruv natijalari:</div>
                

                @if($courses->count()>0)
                <div class="search-hudud">To‘garaklar</div>
                @foreach ($courses as $course)
                <a href="{{ route('viewCource', $course->slug) }}" class="search-hudud-text">{{ $course->getTranslatedAttribute('title', \App::getLocale()) }}</a>
                @endforeach
                @endif


                @if($posts->count()>0)
                <div class="search-hudud">E'lonlar</div>
                @foreach ($posts as $post)
                <a href="{{ route('viewPost', $post->slug) }}" class="search-hudud-text">{{ $post->getTranslatedAttribute('title', \App::getLocale()) }}</a>
                @endforeach
                @endif

                @if($oavs->count()>0)
                <div class="search-hudud">OAV niz haqimizda</div>
                @foreach ($oavs as $oav)
                <a href="{{ route('viewOav', $oav->slug) }}" class="search-hudud-text">{{ $oav->getTranslatedAttribute('title', \App::getLocale()) }}</a>
                @endforeach
                @endif

                @if($news->count()>0)
                <div class="search-hudud">Yangiliklar</div>
                @foreach ($news as $new)
                <a href="{{ route('viewNews', $new->slug) }}" class="search-hudud-text">{{ $new->getTranslatedAttribute('title', \App::getLocale()) }}</a>
                @endforeach
                @endif

                @if($events->count()>0)
                <div class="search-hudud">Hodisalar</div>
                @foreach ($events as $event)
                <a href="{{ route('viewEvent', $event->slug) }}" class="search-hudud-text">{{ $event->getTranslatedAttribute('title', \App::getLocale()) }}</a>
                @endforeach
                @endif
            </div>
        </div>
    </div>
@endsection