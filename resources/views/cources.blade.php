@extends('layouts.index')



@section('breadcrumb')
<div class="header-pages" style="background-image: url('./images/pages-bg.png');">
    <h1 class="header-pages-title">{{ $coursePage->getTranslatedAttribute('title', \App::getLocale()) }}</h1>
</div>
@endsection

@section('content')
    <!--Main
        ==================================-->
    <div class="togarak-in">
        <div class="togarak">
            @livewire('courses-component')

        </div>
    </div>

    @include('sections.cources-modal')
@endsection

