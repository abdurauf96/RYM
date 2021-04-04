@extends('layouts.index')

@section('breadcrumb')
<div class="header-pages" style="background-image: url('./images/pages-bg.png');">
    <h1 class="header-pages-title">{{$about->getTranslatedAttribute('title', \App::getLocale())}}</h1>
</div>
@endsection

@section('content')
     <!--Main
    ==================================-->
    <div class="rym-container">
        <div class="our-history">
            <div class="title t-a">{{$about->getTranslatedAttribute('history_block_title', \App::getLocale())}}</div>
            <div class="our-history-block">
                @foreach ($histories as $history)
                <div class="our-history-item">
                    <div class="our-history-icon-wrap">
                        <div class="our-history-icon">
                            <img src="{{ Voyager::image($history->icon) }}" alt="">
                        </div>
                    </div>
                    <div class="our-history-title">{{$history->getTranslatedAttribute('title', \App::getLocale())}}</div>
                    <div class="our-history-year">{{ $history->year }}</div>
                </div>
                @endforeach
               
            </div>
            <div class="our-history-text">{!! $about->getTranslatedAttribute('body', \App::getLocale()) !!}</div>
        </div>

    </div>

    <div class="master-talk" style="background-image: url(./images/grandMasterTalk.png);">
        <div class="rym-container">
            <div class="master-talk-block">
                <div class="own-events master-talk-info">
                    <div class="master-talk-img">
                        <img src="{{ Voyager::image($about->opinion_author_image) }}" alt="">
                    </div>
                    <div class="own-events-name master-talk-info-name">{{$about->getTranslatedAttribute('opinion_block_author', \App::getLocale())}}</div>
                    <div class="title t-a">{{$about->getTranslatedAttribute('opinion_block_title', \App::getLocale())}}</div>
                    <div class="own-events-text">{{$about->getTranslatedAttribute('opinion_block_body', \App::getLocale())}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('sections.partners')

    <div class="why-we">
        <div class="rym-container">
            <div class="why-we-wrap">
                <div class="why-we-comment">
                    <div class="title">Nega aynan biz?</div>
                    <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna
                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo consequat. Duis
                        aute irure dolor in reprehen</div>
                </div>
                <div class="why-we-block">
                    @foreach ($features as $feature)
                    <div class="why-we-item">
                        <div class="why-we-icon">
                            <img src="{{ Voyager::image($feature->icon) }}" alt="">
                        </div>
                        <div class="why-we-info">
                            <h6 class="why-we-title">{{$feature->getTranslatedAttribute('title', \App::getLocale())}}</h6>
                            <div class="text">
                                {{$feature->getTranslatedAttribute('body', \App::getLocale())}}
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>

    <div class="our-team">
        <div class="rym-container">
            <div class="title t-a">{{$about->getTranslatedAttribute('team_block_title', \App::getLocale())}}</div>
            <div class="our-team-top-text">
                <div class="text t-a">{{$about->getTranslatedAttribute('team_block_description', \App::getLocale())}}</div>
            </div>
            <div class="our-team-block">
                @foreach ($teams as $team)
                <div class="our-team-item">
                    <div class="our-team-img">
                        <img src="{{ Voyager::image($team->image) }}" alt="">
                    </div>
                    <h6 class="our-team-title">{{$team->getTranslatedAttribute('name', \App::getLocale())}}</h6>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="our-mark">
        <div class="rym-container">
            <div class="our-mark-slider">
                @foreach ($opinions as $opinion)
                <div class="our-mark-slider-item">
                    <div class="our-mark-text">{{ $opinion->getTranslatedAttribute('body', \App::getLocale()) }}
                    </div>
                    <div class="our-mark-block">
                        <div class="our-mark-img">
                            <img src="{{ Voyager::image($opinion->image) }}" alt="">
                        </div>
                        <div class="our-mark-title">{{ $opinion->getTranslatedAttribute('author', \App::getLocale()) }} <br> <span>{{ $opinion->getTranslatedAttribute('profession', \App::getLocale()) }}</span></div>
                        <div class="our-mark-star">
                            <div class="rate">
                                @for ($i = 0; $i < 5-$opinion->number_stars; $i++)
                                {{-- <input type="radio"  id="star2" name="rate" value="4" /> --}}
                                <label for="star" title="text"></label>
                                @endfor
                                @for ($i = 0; $i < $opinion->number_stars; $i++)
                                <label class="fill" for="star"  title="text"></label>  
                                @endfor
                            </div>
                        </div>
                    </div>
                </div> 
                @endforeach
            </div>
        </div>
    </div>

    <div class="events">
        <div class="rym-container">
            @include('sections.subscribe')
        </div>
    </div>
@endsection