@extends('layouts.index')

@section('breadcrumb')
<div class="header-pages" style="background-image: url('./images/pages-bg.png');">
    <h1 class="header-pages-title">Tez-tez beriladigan savollar</h1>
</div>
@endsection

@section('content')
    <!--Main
        ==================================-->
    <div class="faq">
        <div class="rym-container">
            @foreach ($faqs as $faq)
            <div class="faq-block">
                <div class="faq-top">
                    <div class="faq-top-title">{{ $faq->getTranslatedAttribute('title', \App::getLocale()) }}</div>
                    <div class="faq-top-icon">
                        <svg width="22" height="13" viewBox="0 0 22 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1L11.5 11L21 0.999999" stroke="black" stroke-width="2" />
                        </svg>
                    </div>
                </div>
                <div class="faq-bottom">
                    {!! $faq->getTranslatedAttribute('body', \App::getLocale()) !!}
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
@endsection