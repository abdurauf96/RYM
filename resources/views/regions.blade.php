@extends('layouts.index')

@section('breadcrumb')
<div class="header-pages" style="background-image: url('./images/pages-bg.png');">
    <h1 class="header-pages-title">Hududiy bo‘linmalar</h1>
</div>
@endsection

@section('content')
    <!--Main
        ==================================-->
    <div class="hudud">
        <div class="rym-container">
            @livewire('regions-component')
        </div>
    </div>
@endsection