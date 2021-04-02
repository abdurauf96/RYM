@extends('layouts.index')

@section('breadcrumb')
<div class="header-pages" style="background-image: url('/images/pages-bg.png');">
    <h1 class="header-pages-title">Tuzilma</h1>
</div>
@endsection

@section('content')
    <!--Main
        ==================================-->
        <div class="rym-container">
            <div class="togarak-page">
                <div class="togarak-page-top">
                    <div class="togarak-page-top-info">
                        <h5 class="togarak-page-top-title">To’garak tashkil etildi</h5>
                        <div class="togarak-page-top-date">12.12.2020</div>
                        <div class="togarak-page-top-loc">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0)">
                                    <path
                                        d="M17.5 8.33334C17.5 14.1667 10 19.1667 10 19.1667C10 19.1667 2.5 14.1667 2.5 8.33334C2.5 6.34422 3.29018 4.43656 4.6967 3.03004C6.10322 1.62352 8.01088 0.833344 10 0.833344C11.9891 0.833344 13.8968 1.62352 15.3033 3.03004C16.7098 4.43656 17.5 6.34422 17.5 8.33334Z"
                                        stroke="#009746" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M10 10.8334C11.3807 10.8334 12.5 9.71409 12.5 8.33337C12.5 6.95266 11.3807 5.83337 10 5.83337C8.61929 5.83337 7.5 6.95266 7.5 8.33337C7.5 9.71409 8.61929 10.8334 10 10.8334Z"
                                        stroke="#009746" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </g>
                                <defs>
                                    <clipPath id="clip0">
                                        <rect width="20" height="20" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            Toshkent
                        </div>
                    </div>
                    <button class="togarak-page-top-btn togarakModal">Ariza yuborish</button>
                </div>
                <div class="togarak-page-phrase">
                    <p class="togarak-page-phrase-text">Siz istemolchiga ta`sir o`tkazib o`z mahsulotingizni sotishni
                        istaysizmi?
                    </p>
                    <p class="togarak-page-phrase-text">Siz istemolchiga ta`sir o`tkazib o`z mahsulotingizni sotishni
                        istaysizmi?
                    </p>
                    <p class="togarak-page-phrase-text">Siz istemolchiga ta`sir o`tkazib o`z mahsulotingizni sotishni
                        istaysizmi?
                    </p>
                    <p class="togarak-page-phrase-text">Siz istemolchiga ta`sir o`tkazib o`z mahsulotingizni sotishni
                        istaysizmi?
                    </p>
                </div>
                <div class="togarak-page-img-block">
                    <div class="togarak-page-img-item">
                        <img src="images/slider2.png" alt="">
                    </div>
                    <div class="togarak-page-img-item">
                        <img src="images/grandMasterTalk.png" alt="">
                    </div>
                </div>
                <div class="togarak-page-middle-info">
                    <h4 class="togarak-page-middle-title">UNDA “MARKETING” TO`GARAGI SIZ UCHUN!!!</h4>
                    <div class="togarak-page-middle-text">
                        Ilk master klass 2021 yil 2 mart kuni soat 14:00da filialning majlislar zalida (101-xona)
                        o`tkazilishi rejalashtirilgan.
                        TO`GARAK AZOLIGIGA QABUL 01.03.2021 yil soat 18:00 gacha. (1-kurslar uchun 13 mart soat 17-00 gacha)
                    </div>
                </div>
                <div class="togarak-page-master">
                    <h4 class="togarak-page-master-title">Master-klass o`tkazuvchi
                    </h4>
                    <div class="togarak-page-master-block">
                        <div class="togarak-page-master-img">
                            <img src="images/tek.png" alt="">
                        </div>
                        <div class="togarak-page-master-info">
                            <h5 class="togarak-page-master-info-name">G‘aniyev Ibragim Mamadiyevich</h5>
                            <div class="togarak-page-master-info-pos">Iqtisod fanlari nomzodi, dotsent</div>
                            <div class="togarak-page-master-info-text">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit. Nunc praesent fames etiam porttitor arcu nec gravida. Tellus ut
                                vulputate lectus aliquam velit, nibh ac. Nibh nibh iaculis pharetra, nibh. Varius elementum
                                scelerisque dictum arcu
                                velit in viverra posuere.
                                Sed nisl a elementum aliquam pharetra tincidunt. Ac ac duis sed a ante malesuada venenatis
                                vulputate. Nibh hac interdum
                                ullamcorper vitae egestas. Eget quisque turpis sagittis eleifend risus, ac magna turpis.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('sections.cources-modal')
@endsection