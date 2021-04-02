@extends('layouts.index')

@section('breadcrumb')
<div class="header-pages" style="background-image: url('./images/pages-bg.png');">
    <h1 class="header-pages-title">Qidiruv natijasi</h1>
    <p class="search-header-page">Sizning so’rovingiz bo‘yicha qidiruv natijalari: <strong>Navoiy</strong></p>
</div>
@endsection

@section('content')
    <!--Main
        ==================================-->
    <div class="search">
        <div class="rym-container">
            <div class="search-block">
                <div class="search-input-wrap">
                    <input class="search-input" placeholder="Navoiy" />
                </div>
                <div class="search-title">Sizning so’rovingiz bo‘yicha qidiruv natijalari:</div>
                <div class="search-hudud">Hududiy bo’linmalar</div>
                <p class="search-hudud-text">Navoiy shahar, Navoiy ko’chasi, +99 879 597 22 14, Zarafshon shahar...</p>

                <div class="search-togarak">To‘garaklar</div>
                <p class="search-togarak-text">“Marketing” to’garagi, O’qituvchi Sarvar Toirov Sobirovich Lorem ipsum
                    dolor sit amet, consectetur adipiscing elit.
                    Risus commodo justo blandit sit in quam augue. Velit et.</p>
            </div>
        </div>
    </div>
@endsection