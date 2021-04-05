@extends('layouts.index')

@section('breadcrumb')
<div class="header-pages contact-pages" style="background-image: url('/images/pages-bg.png');">
    <h1 class="header-pages-title">Aloqa</h1>
</div>
@endsection

@section('content')
    <!--Main
        ==================================-->
    <div class="rym-container">
        <div class="contact">
            <div class="contact-form-wrap">
                <h1 class="contact-title">Aloqa</h1>
                @livewire('contact-form')
            </div>

            <div class="contact-map-block">
                <div class="contact-map" id="map"></div>
                <div class="contact-map-info">
                    <div class="contact-map-info-title">Bizning Manzil</div>
                    <div class="contact-map-info-social">
                        <div class="contact-map-info-social-icon">
                            <svg width="34" height="33" viewBox="0 0 34 33" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M23.5755 22.3602C25.5599 19.728 26.9167 16.835 26.9167 13.9067C26.9167 8.67316 22.4768 4.43049 17 4.43049C11.5232 4.43049 7.08333 8.67316 7.08333 13.9067C7.08333 16.835 8.44006 19.728 10.4245 22.3602C12.394 24.9726 14.8156 27.1062 16.5423 28.4575C16.8255 28.6791 17.1745 28.6791 17.4577 28.4575C19.1844 27.1062 21.606 24.9726 23.5755 22.3602ZM19.2531 30.5521C22.914 27.6867 29.75 21.3411 29.75 13.9067C29.75 7.17785 24.0417 1.72299 17 1.72299C9.95837 1.72299 4.25 7.17785 4.25 13.9067C4.25 21.3411 11.0859 27.6867 14.7469 30.5521C16.0744 31.5909 17.9256 31.5909 19.2531 30.5521Z"
                                    fill="white" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M17.0006 11.1992C15.4358 11.1992 14.1673 12.4114 14.1673 13.9067C14.1673 15.402 15.4358 16.6142 17.0006 16.6142C18.5655 16.6142 19.834 15.402 19.834 13.9067C19.834 12.4114 18.5655 11.1992 17.0006 11.1992ZM11.334 13.9067C11.334 10.916 13.871 8.49167 17.0006 8.49167C20.1302 8.49167 22.6673 10.916 22.6673 13.9067C22.6673 16.8972 20.1302 19.3217 17.0006 19.3217C13.871 19.3217 11.334 16.8972 11.334 13.9067Z"
                                    fill="white" />
                            </svg>
                        </div>
                        <div class="contact-map-info-social-name">832 Thompson Drive, San Fransisco
                            CA 94107, United States</div>
                    </div>
                    <a href="tel:+123345123556" class="contact-map-info-social">
                        <div class="contact-map-info-social-icon">
                            <svg width="34" height="34" viewBox="0 0 34 34" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M6.58395 3.71292C8.41277 1.96532 11.4374 2.17073 12.9892 4.14791L15.5651 7.42989C16.834 9.04675 16.6658 11.3093 15.1703 12.7384L13.2711 14.5532C13.4552 15.011 14.061 16.0155 15.9061 17.7786C17.7511 19.5417 18.8025 20.1207 19.2816 20.2966L21.1806 18.4819C22.6762 17.0527 25.0439 16.8919 26.7358 18.1046L30.1704 20.5661C32.2394 22.049 32.4544 24.9393 30.6255 26.6868C30.031 27.255 29.9304 27.3511 28.9381 28.2993C27.9269 29.2656 25.7798 30.1688 23.6058 30.2591C20.204 30.4005 15.5832 28.9571 9.8957 23.5222C4.20825 18.0873 2.6977 13.6717 2.84562 10.4209C2.9279 8.61252 3.52954 6.6264 4.90446 5.33294C5.88876 4.37723 6.01677 4.25491 6.58395 3.71292ZM5.67627 10.5385C5.57375 12.7919 6.56756 16.5129 11.8992 21.6077C17.2308 26.7025 21.1247 27.6522 23.4828 27.5542C25.6841 27.4627 26.865 26.4463 26.9347 26.3848L28.6221 24.7724C29.2317 24.1898 29.1601 23.2264 28.4704 22.7321L25.0358 20.2706C24.4718 19.8664 23.6826 19.92 23.1841 20.3964C22.4331 21.1141 21.9203 21.6112 20.9167 22.5667C18.8319 24.5514 15.2632 20.9932 13.9026 19.6932C12.6523 18.4984 8.84197 14.9799 10.8935 12.9962C10.8976 12.9923 11.4501 12.4643 13.1668 10.8239C13.6653 10.3475 13.7214 9.59334 13.2984 9.05439L10.7225 5.77241C10.2052 5.11335 9.19702 5.04488 8.58743 5.62741C8.02634 6.16356 7.39136 6.77034 6.90172 7.24149C5.89395 8.21116 5.73021 9.35313 5.67627 10.5385Z"
                                    fill="white" />
                            </svg>
                        </div>
                        <div class="contact-map-info-social-name">+123 345123 556</div>
                    </a>
                    <a href="#" class="contact-map-info-social">
                        <div class="contact-map-info-social-icon">
                            <svg width="34" height="33" viewBox="0 0 34 33" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M28.3327 7.03349H5.66602C4.88362 7.03349 4.24935 7.63959 4.24935 8.38724V24.6322C4.24935 25.3799 4.88362 25.986 5.66602 25.986H28.3327C29.1151 25.986 29.7493 25.3799 29.7493 24.6322V8.38724C29.7493 7.63959 29.1151 7.03349 28.3327 7.03349ZM5.66602 4.32599C3.31881 4.32599 1.41602 6.14428 1.41602 8.38724V24.6322C1.41602 26.8753 3.31881 28.6935 5.66602 28.6935H28.3327C30.68 28.6935 32.5827 26.8753 32.5827 24.6322V8.38724C32.5827 6.14428 30.68 4.32599 28.3327 4.32599H5.66602Z"
                                    fill="white" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M7.41042 10.2279C7.91131 9.65352 8.8046 9.57592 9.40566 10.0546L16.0918 15.3789C16.6172 15.7972 17.3803 15.7972 17.9057 15.3789L24.5918 10.0546C25.1929 9.57592 26.0862 9.65352 26.587 10.2279C27.088 10.8023 27.0068 11.6559 26.4057 12.1345L19.7195 17.4588C18.1434 18.714 15.8541 18.714 14.2779 17.4588L7.59181 12.1345C6.99074 11.6559 6.90954 10.8023 7.41042 10.2279Z"
                                    fill="white" />
                            </svg>
                        </div>
                        <div class="contact-map-info-social-name">support@elmna.com</div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="togarak-success">
        <div class="togarak-success-block">
            <!-- <div class="togarak-success-title">Ariza yuborildi!</div> -->
            <div class="togarak-success-img">
                <img src="/images/success.png" alt="">
            </div>
            <button type="button" class="togarak-success-btn">Yopish</button>
        </div>
    </div>
@endsection

@section('js')
<script>
    // Initialize and add the map
    function initMap() {
        // The location of Uluru
        var uluru = { lat: -25.344, lng: 131.036 };
        // The map, centered at Uluru
        var map = new google.maps.Map(
            document.getElementById('map'), { zoom: 7, center: uluru });
        // The marker, positioned at Uluru
        var marker = new google.maps.Marker({ position: uluru, map: map });
    }


</script>
<script async="" defer=""
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAlFroO7C1GYV5PKyg1IOXVvBp42eAZrBU&amp;callback=initMap">
</script>
@endsection