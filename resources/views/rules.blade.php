@extends('layouts.index')

@section('breadcrumb')
<div class="header-pages" style="background-image: url('./images/pages-bg.png');">
    <h1 class="header-pages-title">{{ $rulePage->getTranslatedAttribute('title', \App::getLocale()) }}</h1>
</div>
@endsection

@section('content')
    <!--Main
        ==================================-->
    <div class="ustav">
        <div class="rym-container">
            @foreach ($rules as $rule)
            <div class="ustav-block">
                <div class="ustav-top">
                    <button type="button" class="ustav-top-title">{{ $rule->getTranslatedAttribute('title', \App::getLocale()) }}</button>
                </div>
                <div class="ustav-bottom">
                    <div class="ustav-bottom-text">
                        {!! $rule->getTranslatedAttribute('body', \App::getLocale()) !!}
                    </div>
                    @if($rule->file!='[]')
                        @php
                            $file=json_decode($rule->file)[0];
                        @endphp
                        <a class="ustav-bottom-btn" href="{{ Voyager::image($file->download_link) }}" >
                           @lang('messages.download')
                        </a>
                
                    @endif
                    
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
@endsection