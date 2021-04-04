@extends('layouts.index')

@section('breadcrumb')
<div class="header-pages" style="background-image: url('/images/pages-bg.png');">
    <h1 class="header-pages-title">Xujjatlar</h1>
</div>
@endsection

@section('content')
    <!--Main
        ==================================-->
        <div class="documents-in">
            <div class="rym-container">
                <h3 class="documents-in-title t-a">{{ $document->getTranslatedAttribute('title', \App::getLocale()) }}</h3>
                <div class="documents-in-block">
                    {!! $document->getTranslatedAttribute('body', \App::getLocale()) !!}
                </div>
            </div>
        </div>
@endsection