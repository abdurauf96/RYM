@extends('layouts.index')

@section('breadcrumb')
<div class="header-pages" style="background-image: url('./images/pages-bg.png');">
    <h1 class="header-pages-title">E’lonlar</h1>
</div>
@endsection

@section('content')
    <!--Main
        ==================================-->
    @livewire('post-component')
@endsection