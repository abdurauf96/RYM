@extends('layouts.index')

@section('breadcrumb')
<div class="header-pages" style="background-image: url('./images/pages-bg.png');">
    <h1 class="header-pages-title">Me`yoriy xujjatlar</h1>
</div>
@endsection

@section('content')
    <!--Main
        ==================================-->
        <div class="documents">
            @livewire('document-component')
        </div>
@endsection