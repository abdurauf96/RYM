<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap-scss/bootstrap-grid.min.css">
    <link rel="stylesheet" href="/libs/slick/slick.css">
    
    <link rel="stylesheet" href="/css/style.min.css">
    <link rel="stylesheet" href="/css/media.min.css">
    <link rel="stylesheet" href="/css/menu.css">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap"
        rel="stylesheet">
    
    <title>{{ MetaTag::get('title') }}</title>

        {!! MetaTag::tag('description') !!}
        {!! MetaTag::tag('keywords') !!}
        
        {!! MetaTag::openGraph() !!}
    @yield('styles')
    @livewireStyles
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
    <!--Header
==================================-->
    <header id="top" style="background-image: url('/images/main-bg.png');">
        <div class="header-fixed">
            <div class="header-top">
                <div class="rym-container">
                    <div class="header-top-block d-f justify-content-between">
                        <div class="header-top-social d-f">
                            <a href="tel:{{ $link->phone_header }}" class="header-top-social-phone d-f align-items-center">

                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M22.0448 17.52C21.3892 16.9703 17.5448 14.5358 16.9058 14.6475C16.6058 14.7008 16.3763 14.9565 15.762 15.6893C15.4779 16.0499 15.166 16.3877 14.829 16.6995C14.2116 16.5504 13.614 16.3288 13.0485 16.0395C10.831 14.9599 9.03947 13.1679 7.9605 10.95C7.67118 10.3846 7.44964 9.78691 7.3005 9.1695C7.6123 8.83252 7.95009 8.52056 8.31075 8.2365C9.04275 7.62225 9.29925 7.39425 9.3525 7.09275C9.46425 6.45225 7.0275 2.60925 6.48 1.95375C6.2505 1.68225 6.042 1.5 5.775 1.5C5.001 1.5 1.5 5.829 1.5 6.39C1.5 6.43575 1.575 10.9425 7.26675 16.7333C13.0575 22.425 17.5642 22.5 17.61 22.5C18.171 22.5 22.5 18.999 22.5 18.225C22.5 17.958 22.3177 17.7495 22.0448 17.52Z"
                                        fill="#EBE5DB" />
                                    <path
                                        d="M17.25 11.25H18.75C18.7482 9.65925 18.1155 8.13416 16.9907 7.00933C15.8658 5.8845 14.3408 5.25179 12.75 5.25V6.75C13.9431 6.75119 15.087 7.22568 15.9307 8.06933C16.7743 8.91299 17.2488 10.0569 17.25 11.25Z"
                                        fill="#EBE5DB" />
                                    <path
                                        d="M21 11.25H22.5C22.497 8.66505 21.4688 6.18683 19.641 4.359C17.8132 2.53116 15.3349 1.50298 12.75 1.5V3C14.9372 3.00258 17.0342 3.8726 18.5808 5.41922C20.1274 6.96584 20.9974 9.06276 21 11.25Z"
                                        fill="#EBE5DB" />
                                </svg>



                                <p class="header-top-social-title ml-l">{{ $link->phone_header }}</p>
                            </a>
                            <a href="#" class="header-top-social-email d-f align-items-center ml-2">

                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11.9995 10.8698L21.4595 5.31976C21.1872 4.91681 20.821 4.58612 20.3924 4.35617C19.9639 4.12621 19.4859 4.0039 18.9995 3.99976H4.99953C4.51071 3.99954 4.02924 4.11878 3.59702 4.34709C3.16479 4.57541 2.7949 4.90588 2.51953 5.30976L11.9995 10.8698Z"
                                        fill="#EBE5DB" />
                                    <path
                                        d="M13 12.5898C12.6962 12.7661 12.3513 12.8592 12 12.8598C11.6496 12.8623 11.3048 12.7726 11 12.5998L2 7.32983V16.9998C2 17.7955 2.31607 18.5585 2.87868 19.1212C3.44129 19.6838 4.20435 19.9998 5 19.9998H19C19.7956 19.9998 20.5587 19.6838 21.1213 19.1212C21.6839 18.5585 22 17.7955 22 16.9998V7.32983L13 12.5898Z"
                                        fill="#EBE5DB" />
                                </svg>
                                <p class="header-top-social-title ml-l">{{ $link->email }}</p>
                            </a>
                        </div>
                        <div class="header-top-lang pos-r">
                            <div class="header-top-lang-top d-f align-items-center">
                                <p class="header-top-lang-title mr-l">
                                    @php
                                        $lang=app()->getLocale();
                                    @endphp
                                    @if($lang=='uz') ?????? @elseif($lang=='ru') ?????? @else ENG @endif </p>
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M15.9365 4.5835L7.96845 12.5408L0.0644531 4.62723L1.18872 3.50403L7.96952 10.2944L14.8143 3.45923L15.9365 4.5835Z"
                                        fill="#EBE5DB" />
                                </svg>
                            </div>
                            <ul class="header-top-lang-bottom">
                                <li class="header-top-lang-bottom-item">
                                    <a href="/locale/uz" class="header-top-lang-bottom-link">Uzbek</a>
                                </li>
                                <li class="header-top-lang-bottom-item">
                                    <a href="/locale/en" class="header-top-lang-bottom-link">English</a>
                                </li>
                                <li class="header-top-lang-bottom-item">
                                    <a href="/locale/ru" class="header-top-lang-bottom-link">Russian</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-nav @yield('extra_class')">
                <div class="rym-container">
                    <div class="header-nav-block d-f align-items-center">
                        <ul class="header-nav-menu d-f align-items-center flex-fill">
                            <li class="header-nav-logo mr-3">
                                <a href="/">
                                    <img src="{{ Voyager::image($link->logo_header) }}" alt="">
                                </a>
                            </li>
                            {{ menu('main', 'layouts.menu') }}
                        </ul>
                        <div class="header-nav-search-wrap">
                            <form action="/search" method="GET">
                                @csrf
                                <input type="text" class="header-nav-search" name="q" placeholder="Search...">
                            </form>
                            
                        </div>

                        <div class="mobile-gamburger">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        @if ( Route::currentRouteName()=='home')
            @include('sections.hero-slider')
        @else
            @yield('breadcrumb')
        @endif
    </header>

    <!-- Mobile menu content -->
    <div class="app-navigation-drawer p-fixed w-100 h-100 hidden">
        <div class="app-drawer-content d-flex f-column h-100 p-relative text-white">
            <div class="drawer-content f-full d-flex">
                <div class="drawer-content__left">
                    <!-- 1234 -->
                </div>

                <div class="drawer-content__middle">
                    <ul class="mobile-menu">
                        {{ menu('main', 'layouts.mobile-menu') }}
                    </ul>
                </div>

                <div class="drawer-content__right">
                    <!-- aaaa -->
                </div>
            </div>
            <div class="drawer-footer d-flex align-center">
                <!-- Footer -->
            </div>
            <div class="app-drawer-close p-absolute pointer">
                <svg xmlns="http://www.w3.org/2000/svg" width="17.999" height="18" viewBox="0 0 17.999 18">
                    <path id="Union_9" data-name="Union 9"
                        d="M-10501-7368.2l-7.2,7.2-1.8-1.8,7.2-7.2-7.2-7.2,1.8-1.8,7.2,7.2,7.2-7.2,1.8,1.8-7.2,7.2,7.2,7.2-1.8,1.8Z"
                        transform="translate(10510 7379)" fill="#fff"></path>
                </svg>
            </div>
        </div>
        <div class="drawer-reveal p-absolute w-100 h-100"></div>
        <div class="app-layer p-absolute"></div>
    </div>
    <!-- End Mobile menu content -->

    <!--Main
===================================-->
    @yield('content')
  

   

     <!--Footer
====================================-->

<div class="footer">
    <a href="#top" class="footer-arrow">
        <img src="/images/footer-arrow.png" alt="">
    </a>
    <div class="rym-container">
        <div class="footer-block">
            <div class="footer-social">
                <div class="footer-social-logo">
                    <img src="{{ Voyager::image($link->logo_footer) }}" alt="">
                </div>
                <p class="footer-social-links-title">@lang('messages.social')</p>
                <ul class="footer-social-links">
                    <li class="footer-social-links-item"><a href="{{ $link->facebook }}" class="footer-social-links-link"><svg width="13"
                                height="24" viewBox="0 0 13 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.291 13.4242L11.9175 9.41527H7.99995V6.81374C7.99995 5.71697 8.5472 4.64789 10.3018 4.64789H12.0828V1.23471C12.0828 1.23471 10.4666 0.963867 8.92129 0.963867C5.69505 0.963867 3.58623 2.88397 3.58623 6.35989V9.41527H0V13.4242H3.58623V23.1156H7.99995V13.4242H11.291Z"
                                    fill="#118844" />
                            </svg>
                        </a></li>
                    <li class="footer-social-links-item"><a href="{{ $link->twitter }}" class="footer-social-links-link"><svg width="23"
                                height="21" viewBox="0 0 23 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19.8747 5.85521C19.8887 6.06987 19.8887 6.28458 19.8887 6.49923C19.8887 13.0466 15.3207 20.5907 6.97161 20.5907C4.39941 20.5907 2.00997 19.7779 0 18.3673C0.36546 18.4133 0.716816 18.4286 1.09634 18.4286C3.21871 18.4286 5.17247 17.6467 6.73265 16.3127C4.73675 16.2666 3.06412 14.8406 2.48783 12.8779C2.76897 12.9239 3.05006 12.9546 3.34526 12.9546C3.75286 12.9546 4.1605 12.8932 4.53998 12.7859C2.45975 12.3259 0.899524 10.3326 0.899524 7.92524V7.86392C1.50389 8.23193 2.20674 8.46193 2.95163 8.49256C1.72879 7.6032 0.927647 6.08521 0.927647 4.36785C0.927647 3.44787 1.1525 2.60453 1.54608 1.86852C3.78094 4.87387 7.14025 6.83651 10.9071 7.05122C10.8369 6.68321 10.7947 6.29992 10.7947 5.91657C10.7947 3.18719 12.8187 0.963867 15.3347 0.963867C16.6418 0.963867 17.8225 1.56187 18.6518 2.52788C19.6778 2.31322 20.6617 1.8992 21.5332 1.33187C21.1958 2.48191 20.479 3.44791 19.5373 4.06121C20.4509 3.95393 21.3364 3.67786 22.1516 3.29456C21.5333 4.27586 20.7602 5.14984 19.8747 5.85521Z"
                                    fill="#009746" />
                            </svg>
                        </a></li>
                    <li class="footer-social-links-item"><a href="{{ $link->telegram }}" class="footer-social-links-link"><svg
                                width="23px" height="23px" viewBox="0 -31 512 512"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill="#009746" d="m123.195312 260.738281 63.679688 159.1875
                                    82.902344-82.902343 142.140625 112.976562 100.082031-450-512
                                    213.265625zm242.5-131.628906-156.714843 142.941406-19.519531
                                    73.566407-36.058594-90.164063zm0 0" />
                            </svg>
                        </a></li>
                    <li class="footer-social-links-item"><a href="{{ $link->instagram }}" class="footer-social-links-link"><svg width="23"
                                height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.0783 5.39644C7.93533 5.39644 5.40018 7.93216 5.40018 11.0759C5.40018 14.2196 7.93533 16.7553 11.0783 16.7553C14.2213 16.7553 16.7565 14.2196 16.7565 11.0759C16.7565 7.93216 14.2213 5.39644 11.0783 5.39644ZM11.0783 14.7682C9.04724 14.7682 7.38679 13.1123 7.38679 11.0759C7.38679 9.03937 9.0423 7.38349 11.0783 7.38349C13.1144 7.38349 14.7699 9.03937 14.7699 11.0759C14.7699 13.1123 13.1094 14.7682 11.0783 14.7682ZM18.3132 5.16412C18.3132 5.90062 17.7201 6.48883 16.9888 6.48883C16.2524 6.48883 15.6643 5.89567 15.6643 5.16412C15.6643 4.43257 16.2574 3.83942 16.9888 3.83942C17.7201 3.83942 18.3132 4.43257 18.3132 5.16412ZM22.0739 6.5086C21.9899 4.73409 21.5846 3.16224 20.2849 1.86719C18.9902 0.572143 17.4187 0.166824 15.6446 0.0778511C13.8161 -0.0259504 8.33562 -0.0259504 6.50714 0.0778511C4.73797 0.161881 3.16647 0.567201 1.86677 1.86225C0.567074 3.15729 0.166787 4.72914 0.0778337 6.50365C-0.0259446 8.33254 -0.0259446 13.8142 0.0778337 15.6431C0.161845 17.4176 0.567074 18.9895 1.86677 20.2845C3.16647 21.5796 4.73303 21.9849 6.50714 22.0739C8.33562 22.1777 13.8161 22.1777 15.6446 22.0739C17.4187 21.9898 18.9902 21.5845 20.2849 20.2845C21.5797 18.9895 21.9849 17.4176 22.0739 15.6431C22.1777 13.8142 22.1777 8.33748 22.0739 6.5086ZM19.7117 17.6055C19.3262 18.5743 18.58 19.3207 17.6065 19.7111C16.1486 20.2895 12.6894 20.156 11.0783 20.156C9.4673 20.156 6.00308 20.2845 4.55018 19.7111C3.58159 19.3256 2.83537 18.5792 2.44497 17.6055C1.86677 16.1473 2.0002 12.6873 2.0002 11.0759C2.0002 9.46447 1.87172 5.99948 2.44497 4.54626C2.83043 3.57744 3.57664 2.83106 4.55018 2.44057C6.00802 1.86225 9.4673 1.99571 11.0783 1.99571C12.6894 1.99571 16.1536 1.86719 17.6065 2.44057C18.5751 2.82612 19.3213 3.5725 19.7117 4.54626C20.2899 6.00442 20.1565 9.46447 20.1565 11.0759C20.1565 12.6873 20.2899 16.1522 19.7117 17.6055Z"
                                    fill="#009746" />
                            </svg>
                        </a></li>
                </ul>
            </div>
            <div class="footer-menu-block d-f justify-content-between">
                <ul class="footer-menu">
                    <h6 class="footer-menu-title">@lang('messages.center')</h6>
                    @foreach ($footer_menus as $menu)
                    <li class="footer-menu-item"><a href="{{ $menu->link }}" class="footer-menu-link">{{ $menu->getTranslatedAttribute('title', \App::getLocale()) }}</a></li>
                    @if($loop->iteration==5)
                    </ul>
                    <ul class="footer-menu">
                    @endif
                    @endforeach
                    
                </ul>
            </div>
            <div class="footer-info">
                <div class="footer-menu-title">Aloqa</div>
                <div class="footer-info-loc d-f">
                    <svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M14.4264 4.55796C13.8576 3.44314 13.0162 2.48836 11.9793 1.78138C10.9425 1.0744 9.74352 0.637921 8.49265 0.512062C7.9268 0.455615 7.35668 0.455615 6.79083 0.512062C5.53999 0.638004 4.34104 1.07447 3.30415 1.78137C2.26726 2.48826 1.42569 3.4429 0.856753 4.55759C0.140946 5.97985 -0.13554 7.58091 0.0621177 9.15911C0.259776 10.7373 0.922738 12.2221 1.9675 13.4264L7.06218 19.5848C7.13253 19.6699 7.22098 19.7384 7.32116 19.7855C7.42134 19.8325 7.53076 19.8569 7.64155 19.8569C7.75235 19.8569 7.86177 19.8325 7.96195 19.7855C8.06212 19.7384 8.15057 19.6699 8.22093 19.5848L13.3156 13.4264C14.3604 12.2221 15.0233 10.7374 15.221 9.15931C15.4186 7.58117 15.1421 5.98016 14.4264 4.55796ZM7.64155 10.9086C7.04821 10.9086 6.46819 10.7337 5.97484 10.4059C5.4815 10.0782 5.09698 9.61234 4.86991 9.06732C4.64285 8.5223 4.58344 7.92258 4.6992 7.34399C4.81495 6.7654 5.10068 6.23393 5.52023 5.81679C5.93979 5.39965 6.47434 5.11558 7.05628 5.00049C7.63822 4.8854 8.24142 4.94447 8.7896 5.17022C9.33778 5.39597 9.80632 5.77828 10.136 6.26878C10.4656 6.75928 10.6416 7.33596 10.6416 7.92588C10.6406 8.71666 10.3242 9.47479 9.76184 10.034C9.19944 10.5931 8.43692 10.9077 7.64155 10.9086Z"
                            fill="#009746" />
                    </svg>
                    <p class="footer-info-loc-title">{{ $link->getTranslatedAttribute('addres', \App::getLocale()) }}</p>
                </div>
                <a href="tel:{{ $link->phone_footer }}" class="footer-info-phone">{{ $link->phone_footer }}</a>
                <a href="tel:{{ $link->phone_header }}" class="footer-info-phone">{{ $link->phone_header }}</a>
            </div>
        </div>
        <div class="footer-bottom-text">{{ $link->getTranslatedAttribute('footer_text', \App::getLocale()) }}</div>
    </div>
</div>

<script src="/libs/jquery/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
<script src="/libs/custom-select/customSelect.js"></script>
<script src="/libs/slick/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"
    integrity="sha512-cdV6j5t5o24hkSciVrb8Ki6FveC2SgwGfLE31+ZQRHAeSRxYhAQskLkq3dLm8ZcWe1N3vBOEYmmbhzf7NTtFFQ=="
    crossorigin="anonymous"></script>
<script src="/js/main.js"></script>
@yield('js')
@livewireScripts
</body>

</html>