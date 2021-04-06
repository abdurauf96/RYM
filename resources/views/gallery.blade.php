@extends('layouts.index')

@section('styles')
<link rel="stylesheet" href="/libs/fancybox/jquery.fancybox.min.css">
@endsection
@section('breadcrumb')
<div class="header-pages" style="background-image: url('./images/pages-bg.png');">
    <h1 class="header-pages-title">{{ $galleryPage->getTranslatedAttribute('title', \App::getLocale()) }}</h1>
</div>
@endsection

@section('content')
    <!--Main
        ==================================-->

    @livewire('gallery-component')
@endsection

@section('js')
<script src="/libs/fancybox/jquery.fancybox.min.js"></script>
@endsection