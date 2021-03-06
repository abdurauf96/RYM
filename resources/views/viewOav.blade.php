@extends('layouts.index')

@section('breadcrumb')
<div class="header-pages " style="background-image: url('/images/pages-bg.png');">
    <div class="rym-container">
        <h1 class="header-pages-title">{{ $oav->getTranslatedAttribute('title', \App::getLocale()) }}</h1>
    </div>
    <div class="topic-header-social">
        <div class="topic-header-social-left">
            <div class="topic-header-social-left-item">
                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M1.25 15C1.25 15 6.25 5 15 5C23.75 5 28.75 15 28.75 15C28.75 15 23.75 25 15 25C6.25 25 1.25 15 1.25 15Z"
                        stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                        d="M15 18.75C17.0711 18.75 18.75 17.0711 18.75 15C18.75 12.9289 17.0711 11.25 15 11.25C12.9289 11.25 11.25 12.9289 11.25 15C11.25 17.0711 12.9289 18.75 15 18.75Z"
                        stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                {{ $oav->view }}
            </div>
            <div class="topic-header-social-left-item">
                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M8.75 27.5H5C4.33696 27.5 3.70107 27.2366 3.23223 26.7678C2.76339 26.2989 2.5 25.663 2.5 25V16.25C2.5 15.587 2.76339 14.9511 3.23223 14.4822C3.70107 14.0134 4.33696 13.75 5 13.75H8.75M17.5 11.25V6.25C17.5 5.25544 17.1049 4.30161 16.4017 3.59835C15.6984 2.89509 14.7446 2.5 13.75 2.5L8.75 13.75V27.5H22.85C23.4529 27.5068 24.038 27.2955 24.4974 26.905C24.9568 26.5145 25.2596 25.9711 25.35 25.375L27.075 14.125C27.1294 13.7667 27.1052 13.4009 27.0042 13.0528C26.9031 12.7048 26.7276 12.3829 26.4898 12.1094C26.252 11.8359 25.9576 11.6174 25.627 11.469C25.2963 11.3206 24.9374 11.2459 24.575 11.25H17.5Z"
                        stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <span class="likes_oav_id"> {{ $oav->likes()->count() }} </span>
            </div> 
        </div>
        <div class="topic-header-social-right">
            <div class="topic-header-social-right-title">
                @lang('messages.share')
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M18 8C19.6569 8 21 6.65685 21 5C21 3.34315 19.6569 2 18 2C16.3431 2 15 3.34315 15 5C15 6.65685 16.3431 8 18 8Z"
                        stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                        d="M6 15C7.65685 15 9 13.6569 9 12C9 10.3431 7.65685 9 6 9C4.34315 9 3 10.3431 3 12C3 13.6569 4.34315 15 6 15Z"
                        stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                        d="M18 22C19.6569 22 21 20.6569 21 19C21 17.3431 19.6569 16 18 16C16.3431 16 15 17.3431 15 19C15 20.6569 16.3431 22 18 22Z"
                        stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M8.58984 13.51L15.4198 17.49" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M15.4098 6.51001L8.58984 10.49" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>
            <ul class="footer-social-links">
                <li class="footer-social-links-item"><a href="https://www.facebook.com/sharer/sharer.php?u=http://rym.uz/oav/{{ $oav->slug  }}" class="footer-social-links-link"><svg width="13"
                            height="24" viewBox="0 0 13 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11.291 13.4242L11.9175 9.41527H7.99995V6.81374C7.99995 5.71697 8.5472 4.64789 10.3018 4.64789H12.0828V1.23471C12.0828 1.23471 10.4666 0.963867 8.92129 0.963867C5.69505 0.963867 3.58623 2.88397 3.58623 6.35989V9.41527H0V13.4242H3.58623V23.1156H7.99995V13.4242H11.291Z"
                                fill="#118844" />
                        </svg>
                    </a></li>
                <li class="footer-social-links-item"><a href="https://twitter.com/intent/tweet?text={{ $oav->getTranslatedAttribute('title', \App::getLocale()) }}&amp;url=http://rym.uz/oav/" class="footer-social-links-link"><svg width="23"
                            height="21" viewBox="0 0 23 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M19.8747 5.85521C19.8887 6.06987 19.8887 6.28458 19.8887 6.49923C19.8887 13.0466 15.3207 20.5907 6.97161 20.5907C4.39941 20.5907 2.00997 19.7779 0 18.3673C0.36546 18.4133 0.716816 18.4286 1.09634 18.4286C3.21871 18.4286 5.17247 17.6467 6.73265 16.3127C4.73675 16.2666 3.06412 14.8406 2.48783 12.8779C2.76897 12.9239 3.05006 12.9546 3.34526 12.9546C3.75286 12.9546 4.1605 12.8932 4.53998 12.7859C2.45975 12.3259 0.899524 10.3326 0.899524 7.92524V7.86392C1.50389 8.23193 2.20674 8.46193 2.95163 8.49256C1.72879 7.6032 0.927647 6.08521 0.927647 4.36785C0.927647 3.44787 1.1525 2.60453 1.54608 1.86852C3.78094 4.87387 7.14025 6.83651 10.9071 7.05122C10.8369 6.68321 10.7947 6.29992 10.7947 5.91657C10.7947 3.18719 12.8187 0.963867 15.3347 0.963867C16.6418 0.963867 17.8225 1.56187 18.6518 2.52788C19.6778 2.31322 20.6617 1.8992 21.5332 1.33187C21.1958 2.48191 20.479 3.44791 19.5373 4.06121C20.4509 3.95393 21.3364 3.67786 22.1516 3.29456C21.5333 4.27586 20.7602 5.14984 19.8747 5.85521Z"
                                fill="#009746" />
                        </svg>
                    </a></li>
                <li class="footer-social-links-item"><a href="https://telegram.me/share/url?url={{ \Request::url() }}}}" class="footer-social-links-link"><svg
                            width="23px" height="23px" viewBox="0 -31 512 512"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill="#009746" d="m123.195312 260.738281 63.679688 159.1875
                                                    82.902344-82.902343 142.140625 112.976562 100.082031-450-512
                                                    213.265625zm242.5-131.628906-156.714843 142.941406-19.519531
                                                    73.566407-36.058594-90.164063zm0 0" />
                        </svg>
                    </a></li>
                <li class="footer-social-links-item"><a href="" class="footer-social-links-link"><svg width="23"
                            height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11.0783 5.39644C7.93533 5.39644 5.40018 7.93216 5.40018 11.0759C5.40018 14.2196 7.93533 16.7553 11.0783 16.7553C14.2213 16.7553 16.7565 14.2196 16.7565 11.0759C16.7565 7.93216 14.2213 5.39644 11.0783 5.39644ZM11.0783 14.7682C9.04724 14.7682 7.38679 13.1123 7.38679 11.0759C7.38679 9.03937 9.0423 7.38349 11.0783 7.38349C13.1144 7.38349 14.7699 9.03937 14.7699 11.0759C14.7699 13.1123 13.1094 14.7682 11.0783 14.7682ZM18.3132 5.16412C18.3132 5.90062 17.7201 6.48883 16.9888 6.48883C16.2524 6.48883 15.6643 5.89567 15.6643 5.16412C15.6643 4.43257 16.2574 3.83942 16.9888 3.83942C17.7201 3.83942 18.3132 4.43257 18.3132 5.16412ZM22.0739 6.5086C21.9899 4.73409 21.5846 3.16224 20.2849 1.86719C18.9902 0.572143 17.4187 0.166824 15.6446 0.0778511C13.8161 -0.0259504 8.33562 -0.0259504 6.50714 0.0778511C4.73797 0.161881 3.16647 0.567201 1.86677 1.86225C0.567074 3.15729 0.166787 4.72914 0.0778337 6.50365C-0.0259446 8.33254 -0.0259446 13.8142 0.0778337 15.6431C0.161845 17.4176 0.567074 18.9895 1.86677 20.2845C3.16647 21.5796 4.73303 21.9849 6.50714 22.0739C8.33562 22.1777 13.8161 22.1777 15.6446 22.0739C17.4187 21.9898 18.9902 21.5845 20.2849 20.2845C21.5797 18.9895 21.9849 17.4176 22.0739 15.6431C22.1777 13.8142 22.1777 8.33748 22.0739 6.5086ZM19.7117 17.6055C19.3262 18.5743 18.58 19.3207 17.6065 19.7111C16.1486 20.2895 12.6894 20.156 11.0783 20.156C9.4673 20.156 6.00308 20.2845 4.55018 19.7111C3.58159 19.3256 2.83537 18.5792 2.44497 17.6055C1.86677 16.1473 2.0002 12.6873 2.0002 11.0759C2.0002 9.46447 1.87172 5.99948 2.44497 4.54626C2.83043 3.57744 3.57664 2.83106 4.55018 2.44057C6.00802 1.86225 9.4673 1.99571 11.0783 1.99571C12.6894 1.99571 16.1536 1.86719 17.6065 2.44057C18.5751 2.82612 19.3213 3.5725 19.7117 4.54626C20.2899 6.00442 20.1565 9.46447 20.1565 11.0759C20.1565 12.6873 20.2899 16.1522 19.7117 17.6055Z"
                                fill="#009746" />
                        </svg>
                    </a></li>
            </ul>
        </div>
    </div>
</div>
@endsection

@section('content')
    <!--Main
        ==================================-->
    <div class="topic">
        <div class="rym-container">
            @if ($oav->images)
            <div class="topic-img-block">
                @php $images=json_decode($oav->images) @endphp
                @foreach ($images as $image)
                <div class="topic-img-item">
                    <img src="{{ Voyager::image($image) }}" alt="">
                </div>
                @endforeach
            </div>
            @endif
            <div class="documents-in-block">
                {!! $oav->getTranslatedAttribute('body', \App::getLocale()) !!}
            </div>
           
            <div class="topic-like-btn-wrap">
                <button class="topic-like-btn" type="button" data-type="oav_id" data-id="{{ $oav->id }}">
                    <svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10.7918 33.9166H6.16683C5.34908 33.9166 4.56482 33.5918 3.98658 33.0136C3.40835 32.4353 3.0835 31.6511 3.0835 30.8333V20.0416C3.0835 19.2239 3.40835 18.4396 3.98658 17.8614C4.56482 17.2832 5.34908 16.9583 6.16683 16.9583H10.7918M21.5835 13.875V7.70831C21.5835 6.48169 21.0962 5.3053 20.2289 4.43794C19.3615 3.57059 18.1851 3.08331 16.9585 3.08331L10.7918 16.9583V33.9166H28.1818C28.9254 33.9251 29.647 33.6644 30.2136 33.1828C30.7802 32.7012 31.1537 32.031 31.2652 31.2958L33.3927 17.4208C33.4597 16.9789 33.4299 16.5277 33.3053 16.0984C33.1807 15.6692 32.9642 15.2722 32.6709 14.9349C32.3777 14.5976 32.0145 14.3281 31.6068 14.1451C31.199 13.9621 30.7563 13.8699 30.3093 13.875H21.5835Z"
                            stroke="#009746" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    @lang('messages.like')
                </button>
            </div>
        </div>
        <div class="topic-slider-wrap" style="background-image: url(./images/topic-bg.png);">
            <div class="rym-container">
                <div class="news-slider">
                    @foreach ($other_oavs as $other)
                    <div class="news-slider-item">
                        <div class="news-slider-img">
                            <img src="{{ Voyager::image($other->image_view) }}" alt="">
                        </div>
                        <a href="#" class="news-slider-title">{{ $other->getTranslatedAttribute('title', \App::getLocale()) }}</a>
                        <p class="topic-slider-date"> {{ $other->created_at->format('d M, Y') }} </p>
                        <div class="news-slider-text">{{ $other->getTranslatedAttribute('description', \App::getLocale()) }}</div>
                        <a href="{{ route('viewOav', $other->slug ) }}" class="news-slider-link">@lang('messages.more')</a>
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
@endsection