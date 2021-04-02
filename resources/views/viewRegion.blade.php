@extends('layouts.index')

@section('breadcrumb')
<div class="header-pages" style="background-image: url('/images/pages-bg.png');">
    <h1 class="header-pages-title">Hududiy bo‘linmalar</h1>
</div>
@endsection

@section('content')
    <!--Main
        ==================================-->
    <div class="hudud">
        <div class="rym-container">
            <div class="hudud-wrap">
                <div class="hudud-top-block hudud-in-top-parent">

                    <div class="hudud-select-wrap">
                        <select name="choose" data-placeholder="Navoi viloyat" class="custom-select">
                            <option value="0">Tashkent viloyat</option>
                            <option value="1">Samarqand viloyat</option>
                        </select>
                    </div>
                    <div class="hudud-in-top-wrap">
                        <h4 class="hudud-top-title">Navoiy viloyati</h4>

                        <p class="hudud-top-title-item">Uchquduq tuman</p>
                    </div>
                </div>
                <div class="hudud-in-block">
                    <div class="hudud-in-slider">
                        <div class="hudud-in-slider-item">
                            <a href="images/tek.png" data-fancybox="zoom-img" class="hudud-in-slider-item-img">
                                <img class="zoom-img" src="images/tek.png" alt="">
                            </a>
                        </div>
                        <div class="hudud-in-slider-item">
                            <a href="images/slider2.png" data-fancybox="zoom-img" class="hudud-in-slider-item-img">
                                <img class="zoom-img" src="images/slider2.png" alt="">
                            </a>
                        </div>
                        <div class="hudud-in-slider-item">
                            <a href="images/girl.png" data-fancybox="zoom-img" class="hudud-in-slider-item-img">
                                <img class="zoom-img" src="images/girl.png" alt="">
                            </a>
                        </div>
                        <div class="hudud-in-slider-item">
                            <a href="images/girls.png" data-fancybox="zoom-img" class="hudud-in-slider-item-img">
                                <img class="zoom-img" src="images/girls.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="hudud-in-info">
                        <div class="hudud-in-info-item"><strong>Manzil:</strong>Uchquduq tuman, Cho’l guli ko’chasi
                        </div>
                        <a href="" class="hudud-in-info-item"><strong>Telefon:</strong> +998-79-243-91-52
                        </a>
                        <div class="hudud-in-info-others"><strong>Bo‘lim boshlig‘i o‘rinbosari vazifasini
                                bajaruvchisi:</strong>Onarqulov Ramzjon Adxamovich <br>
                            Ish telefoni: 243-91-52 <br>
                            Shaxsiy uyali telefoni: 91-115-06-79; 99-726-79-01
                        </div>
                        <div class="hudud-in-info-others"><strong>Bo‘lim boshlig‘i o‘rinbosari vazifasini
                                bajaruvchisi:</strong>Onarqulov Ramzjon Adxamovich <br>
                            Ish telefoni: 243-91-52 <br>
                            Shaxsiy uyali telefoni: 91-115-06-79; 99-726-79-01
                        </div>
                        <div class="hudud-in-info-others"><strong>Bo‘lim boshlig‘i o‘rinbosari vazifasini
                                bajaruvchisi:</strong>Onarqulov Ramzjon Adxamovich <br>
                            Ish telefoni: 243-91-52 <br>
                            Shaxsiy uyali telefoni: 91-115-06-79; 99-726-79-01
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection