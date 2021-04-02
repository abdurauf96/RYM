@extends('layouts.index')

@section('breadcrumb')
<div class="header-pages" style="background-image: url('./images/pages-bg.png');">
    <h1 class="header-pages-title">Galereya</h1>
</div>
@endsection

@section('content')
    <!--Main
        ==================================-->
    <div class="gallery">
        <div class="rym-container">
            <div class="news-page-title-block">
                <h2 class="title"></h2>
                <div class="news-page-filter">
                    <select name="choose" data-placeholder="Filtrlash" class="custom-select">
                        <option value="0">Eng yangi</option>
                        <option value="1">Eng eski</option>
                        <option value="1">Ommabop</option>
                    </select>
                </div>
            </div>
            <div class="rym-row">
                <a href="images/tek.png" data-fancybox="zoom-img" class="gallery-item">
                    <div class="item-ratio">
                        <div class="item-ratio-content">
                            <div class="gallery-img">
                                <img class="zoom-img" src="images/tek.png" alt="">
                            </div>
                            <div class="gallery-top">
                                <div class="gallery-date">12.02.2021</div>
                                <div class="gallery-date">5 rasm</div>
                            </div>
                            <div class="gallery-text">Short disccusions about business in pandemic covid 19</div>
                        </div>
                    </div>
                </a>
                <a href="images/relax.png" data-fancybox="zoom-fancybox" class="gallery-item">
                    <div class="item-ratio">
                        <div class="item-ratio-content">
                            <div class="gallery-img">
                                <img src="images/relax.png" class="zoom-fancybox" alt="">
                            </div>
                            <div class="gallery-top">
                                <div class="gallery-date">12.02.2021</div>
                                <div class="gallery-date">5 rasm</div>
                            </div>
                            <div class="gallery-text">Short disccusions about business in pandemic covid 19</div>
                        </div>
                    </div>
                </a>
                <a href="images/tek.png" data-fancybox="zoom-img" class="gallery-item">
                    <div class="item-ratio">
                        <div class="item-ratio-content">
                            <div class="gallery-img">
                                <img class="zoom-img" src="images/tek.png" alt="">
                            </div>
                            <div class="gallery-top">
                                <div class="gallery-date">12.02.2021</div>
                                <div class="gallery-date">5 rasm</div>
                            </div>
                            <div class="gallery-text">Short disccusions about business in pandemic covid 19</div>
                        </div>
                    </div>
                </a>
                <a href="images/relax.png" data-fancybox="zoom-fancybox" class="gallery-item">
                    <div class="item-ratio">
                        <div class="item-ratio-content">
                            <div class="gallery-img">
                                <img src="images/relax.png" class="zoom-fancybox" alt="">
                            </div>
                            <div class="gallery-top">
                                <div class="gallery-date">12.02.2021</div>
                                <div class="gallery-date">5 rasm</div>
                            </div>
                            <div class="gallery-text">Short disccusions about business in pandemic covid 19</div>
                        </div>
                    </div>
                </a>
                <a href="images/tek.png" data-fancybox="zoom-img" class="gallery-item">
                    <div class="item-ratio">
                        <div class="item-ratio-content">
                            <div class="gallery-img">
                                <img class="zoom-img" src="images/tek.png" alt="">
                            </div>
                            <div class="gallery-top">
                                <div class="gallery-date">12.02.2021</div>
                                <div class="gallery-date">5 rasm</div>
                            </div>
                            <div class="gallery-text">Short disccusions about business in pandemic covid 19</div>
                        </div>
                    </div>
                </a>
                <a href="images/relax.png" data-fancybox="zoom-fancybox" class="gallery-item">
                    <div class="item-ratio">
                        <div class="item-ratio-content">
                            <div class="gallery-img">
                                <img src="images/relax.png" class="zoom-fancybox" alt="">
                            </div>
                            <div class="gallery-top">
                                <div class="gallery-date">12.02.2021</div>
                                <div class="gallery-date">5 rasm</div>
                            </div>
                            <div class="gallery-text">Short disccusions about business in pandemic covid 19</div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="news-page-paginate">
                <button type="button" class="news-page-paginate-btn">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0)">
                            <path
                                d="M11.4165 0.0639724L3.45917 8.03197L11.3728 15.936L12.496 14.8117L5.70557 8.03091L12.5408 1.18611L11.4165 0.0639724Z"
                                fill="black" />
                        </g>
                        <defs>
                            <clipPath id="clip0">
                                <rect width="16" height="16" fill="white"
                                    transform="matrix(4.37114e-08 -1 -1 -4.37114e-08 16 16)" />
                            </clipPath>
                        </defs>
                    </svg>

                    Previous
                </button>
                <ul class="news-page-paginate-links">
                    <li class="news-page-paginate-links-item"><a href="" class="news-page-paginate-links-link">1</a>
                    </li>
                    <li class="news-page-paginate-links-item"><a href="" class="news-page-paginate-links-link">2</a>
                    </li>
                    <li class="news-page-paginate-links-item active"><a href=""
                            class="news-page-paginate-links-link">3</a>
                    </li>
                    <li class="news-page-paginate-links-item"><a href="" class="news-page-paginate-links-link">4</a>
                    </li>
                </ul>
                <button class="news-page-paginate-btn">
                    Next
                    <svg class="news-page-paginate-svg" width="10" height="16" viewBox="0 0 10 16" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M1.58349 0.0639724L9.54083 8.03197L1.62723 15.936L0.504029 14.8117L7.29443 8.03091L0.459228 1.18611L1.58349 0.0639724Z"
                            fill="black" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
@endsection