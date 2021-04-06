@extends('layouts.index')

@section('breadcrumb')
<div class="header-pages" style="background-image: url('./images/pages-bg.png');">
    <h1 class="header-pages-title">{{ $structure->getTranslatedAttribute('title', \App::getLocale()) }}</h1>
</div>
@endsection

@section('content')
    <!--Main
        ==================================-->
    <div class="rym-container">
        <div class="tuzilmalar">
            <div class="tuzilmalar-img">
                <img src="images/tuzilma.png" alt="">
            </div>
        </div>
    </div>
@endsection