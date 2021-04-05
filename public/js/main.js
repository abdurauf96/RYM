$(document).ready(function () {

    $("a[href='#top']").click(function () {
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });

    $('.ustav-top').click(function () {
        $('.ustav-top-title').toggleClass('active');
        $('.ustav-bottom').slideToggle();
    });

    // try {
    //     $('.edit-profile-select,.custom-select').customSelect()
    // } catch (e) {

    // }

    $('.numbers-info-number > span').counterUp({ delay: 15, time: 2000 });

    $('.header-top-lang-top').click(function () {
        $('.header-top-lang-bottom').toggleClass('header-lang-js');
    })

    $('.togarakModal').click(function () {
        $('.togarak-modal').fadeIn();
        var course=$(this).data('course');
        $('.hidden_course').val(course);
       
    });
    function closeCommenttModal(e) {
        var target = $(e.target);
        if (target.is('.togarak-modal')) {
            target.fadeOut();
        }
    }
    $('.togarak-modal').click(closeCommenttModal);


    $('.togarak-modal-btn').click(function () {
        var name =$('.name').val();
        var phone =$('.phone').val();
        var email =$('.email').val();
        var body =$('.body').val();
        var course =$('.hidden_course').val();
        console.log(name, phone, email);
        $.ajax({
            url: "/sign-in",
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                name: name,
                phone: phone,
                email: email,
                body: body,
                course: course,
            },
        })
        .done(function(data){
            $('.togarak-success').fadeIn();
        })
    });
    
    window.addEventListener('messageSent', event => {
        $('.togarak-success').fadeIn();
        
    });

    $('.topic-like-btn').click(function(){
        var _this=$(this);
        $.getJSON("https://api.ipify.org?format=json", function(data) {
            var user_ip=data.ip;
            var type=_this.data('type');
            var id=_this.data('id');
            $.ajax({
                url: "/like",
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    user_ip: user_ip,
                    type: type,
                    id: id,
                },
            })
            .done(function(data){
                console.log(data) ;
            })
            
        })
        
    })

    function closeCommentttModal(e) {
        var target = $(e.target);
        if (target.is('.togarak-success')) {
            target.fadeOut();
        }
    }
    $('.togarak-success').click(closeCommentttModal);

    $('.contact-send-btn').click(function () {
        $('.togarak-success').fadeIn();
    });
    function closeCommenttttModal(e) {
        var target = $(e.target);
        if (target.is('.togarak-success')) {
            target.fadeOut();
        }
    }
    $('.togarak-success').click(closeCommenttttModal);

    $('.togarak-success-btn').click(function () {
        $('.togarak-modal').css('display', 'none');
        $('.togarak-success').css('display', 'none');
    })

    $('.ifoda-video-icon').click(function () {
        $('.ifoda-video').css('display', 'none');
    });

    $('.header-slider').slick({
        dots: true,
        arrows: false,
        fade: true,
        // autoplay: true,
        // autoplaySpeed: 2000,
        nextArrow: `<button class="header-slider-arrow arrow-right">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
    \t viewBox="0 0 512.005 512.005" style="enable-background:new 0 0 512.005 512.005;" xml:space="preserve">
    \t\t<path d="M388.418,240.923L153.751,6.256c-8.341-8.341-21.824-8.341-30.165,0s-8.341,21.824,0,30.165L343.17,256.005
    \t\t\tL123.586,475.589c-8.341,8.341-8.341,21.824,0,30.165c4.16,4.16,9.621,6.251,15.083,6.251c5.461,0,10.923-2.091,15.083-6.251
    \t\t\tl234.667-234.667C396.759,262.747,396.759,249.264,388.418,240.923z"/>
    </svg>
            </button>`,
        prevArrow: `<button class="header-slider-arrow arrow-left">
            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
    \t viewBox="0 0 443.52 443.52" style="enable-background:new 0 0 443.52 443.52;" xml:space="preserve">
    \t\t<path d="M143.492,221.863L336.226,29.129c6.663-6.664,6.663-17.468,0-24.132c-6.665-6.662-17.468-6.662-24.132,0l-204.8,204.8
    \t\t\tc-6.662,6.664-6.662,17.468,0,24.132l204.8,204.8c6.78,6.548,17.584,6.36,24.132-0.42c6.387-6.614,6.387-17.099,0-23.712
    \t\t\tL143.492,221.863z"/>
    </svg>
            </button>`,
    });
    $('.cources-slider').slick({
        dots: false,
        arrows: true,
        nextArrow: `<button class="cources-slider-arrow arrow-right">
            <svg width="36" height="20" viewBox="0 0 36 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M2.02789 11.5186H30.1341L24.8685 16.7736C23.356 18.283 25.6248 20.547 27.1373 19.0376L31.9328 14.2443L35.1341 11.0445C35.7546 10.4216 35.7546 9.41567 35.1341 8.7928L27.1373 0.802844C26.833 0.490836 26.4142 0.31577 25.9779 0.319391C24.5376 0.319572 23.8307 2.07033 24.8685 3.06706L30.1466 8.32206H1.94507C-0.273151 8.43189 -0.107525 11.6288 2.02789 11.5186Z" fill="#009746"/>
</svg>


            </button>`,
        prevArrow: `<button class="cources-slider-arrow arrow-left">
           <svg width="36" height="20" viewBox="0 0 36 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M33.9721 11.5186H5.86586L11.1315 16.7736C12.644 18.283 10.3752 20.547 8.86274 19.0376L4.06716 14.2443L0.865864 11.0445C0.245422 10.4216 0.245422 9.41567 0.865864 8.7928L8.86274 0.802844C9.16698 0.490836 9.58578 0.31577 10.0221 0.319391C11.4624 0.319572 12.1693 2.07033 11.1315 3.06706L5.85336 8.32206H34.0549C36.2732 8.43189 36.1075 11.6288 33.9721 11.5186Z" fill="#009746"/>
</svg>

            </button>`,
    });
    $('.hudud-in-slider').slick({
        dots: false,
        arrows: true,
        nextArrow: `<button class="hudud-in-slider-arrow arrow-right">
            <svg width="36" height="20" viewBox="0 0 36 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M2.02789 11.5186H30.1341L24.8685 16.7736C23.356 18.283 25.6248 20.547 27.1373 19.0376L31.9328 14.2443L35.1341 11.0445C35.7546 10.4216 35.7546 9.41567 35.1341 8.7928L27.1373 0.802844C26.833 0.490836 26.4142 0.31577 25.9779 0.319391C24.5376 0.319572 23.8307 2.07033 24.8685 3.06706L30.1466 8.32206H1.94507C-0.273151 8.43189 -0.107525 11.6288 2.02789 11.5186Z" fill="#009746"/>
</svg>


            </button>`,
        prevArrow: `<button class="hudud-in-slider-arrow arrow-left">
           <svg width="36" height="20" viewBox="0 0 36 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M33.9721 11.5186H5.86586L11.1315 16.7736C12.644 18.283 10.3752 20.547 8.86274 19.0376L4.06716 14.2443L0.865864 11.0445C0.245422 10.4216 0.245422 9.41567 0.865864 8.7928L8.86274 0.802844C9.16698 0.490836 9.58578 0.31577 10.0221 0.319391C11.4624 0.319572 12.1693 2.07033 11.1315 3.06706L5.85336 8.32206H34.0549C36.2732 8.43189 36.1075 11.6288 33.9721 11.5186Z" fill="#009746"/>
</svg>

            </button>`,
    });
    $('.our-mark-slider').slick({
        dots: false,
        arrows: true,
        nextArrow: `<button class="our-mark-slider-arrow arrow-right">
            <svg width="36" height="20" viewBox="0 0 36 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M2.02789 11.5186H30.1341L24.8685 16.7736C23.356 18.283 25.6248 20.547 27.1373 19.0376L31.9328 14.2443L35.1341 11.0445C35.7546 10.4216 35.7546 9.41567 35.1341 8.7928L27.1373 0.802844C26.833 0.490836 26.4142 0.31577 25.9779 0.319391C24.5376 0.319572 23.8307 2.07033 24.8685 3.06706L30.1466 8.32206H1.94507C-0.273151 8.43189 -0.107525 11.6288 2.02789 11.5186Z" fill="#009746"/>
</svg>


            </button>`,
        prevArrow: `<button class="our-mark-slider-arrow arrow-left">
           <svg width="36" height="20" viewBox="0 0 36 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M33.9721 11.5186H5.86586L11.1315 16.7736C12.644 18.283 10.3752 20.547 8.86274 19.0376L4.06716 14.2443L0.865864 11.0445C0.245422 10.4216 0.245422 9.41567 0.865864 8.7928L8.86274 0.802844C9.16698 0.490836 9.58578 0.31577 10.0221 0.319391C11.4624 0.319572 12.1693 2.07033 11.1315 3.06706L5.85336 8.32206H34.0549C36.2732 8.43189 36.1075 11.6288 33.9721 11.5186Z" fill="#009746"/>
</svg>

            </button>`,
    });
    $('.clients-slider').slick({
        arrows: false,
        dots: false,
        slidesToScroll: 1,
        slidesToShow: 5,
        autoplay: true,
        autoplaySpeed: 3000,
        responsive: [
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,

                }
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 575,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ],
    });
    $('.news-slider').slick({
        arrows: true,
        dots: false,
        slidesToScroll: 1,
        slidesToShow: 3,
        // autoplay: true,
        // autoplaySpeed: 3000,
        nextArrow: `<button class="news-slider-arrow arrow-right">
            <svg width="36" height="20" viewBox="0 0 36 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M2.02789 11.5186H30.1341L24.8685 16.7736C23.356 18.283 25.6248 20.547 27.1373 19.0376L31.9328 14.2443L35.1341 11.0445C35.7546 10.4216 35.7546 9.41567 35.1341 8.7928L27.1373 0.802844C26.833 0.490836 26.4142 0.31577 25.9779 0.319391C24.5376 0.319572 23.8307 2.07033 24.8685 3.06706L30.1466 8.32206H1.94507C-0.273151 8.43189 -0.107525 11.6288 2.02789 11.5186Z" fill="#009746"/>
</svg>


            </button>`,
        prevArrow: `<button class="news-slider-arrow arrow-left">
           <svg width="36" height="20" viewBox="0 0 36 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M33.9721 11.5186H5.86586L11.1315 16.7736C12.644 18.283 10.3752 20.547 8.86274 19.0376L4.06716 14.2443L0.865864 11.0445C0.245422 10.4216 0.245422 9.41567 0.865864 8.7928L8.86274 0.802844C9.16698 0.490836 9.58578 0.31577 10.0221 0.319391C11.4624 0.319572 12.1693 2.07033 11.1315 3.06706L5.85336 8.32206H34.0549C36.2732 8.43189 36.1075 11.6288 33.9721 11.5186Z" fill="#009746"/>
</svg>

            </button>`,
        responsive: [
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,

                }
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 575,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ],
    });
});


const appDrawer = document.querySelector('.app-navigation-drawer');
const menuDrawer = document.querySelector('.mobile-gamburger');
const drawerReveal = document.querySelector('.drawer-reveal');
const drawerClose = document.querySelector('.app-drawer-close');

(function () {
    gsap.set(appDrawer, { x: "100%" });

    menuDrawer.addEventListener("click", function () {
        gsap.to(appDrawer, {
            duration: 1,
            x: 0,
            ease: Power4.easeInOut,
            onComplete: () => {
                gsap.to(drawerReveal, {
                    duration: 0.9,
                    x: "-100%",
                    ease: Power4.easeInOut,
                });
            },
        });
    });
})();


// (function () {
drawerClose.addEventListener("click", function () {
    gsap.to(drawerReveal, {
        duration: 1,
        x: "0",
        ease: Power4.easeInOut,
        onComplete: () => {
            gsap.to(appDrawer, {
                duration: 1,
                x: "100%",
                ease: Power4.easeInOut,
            });
        },
    });
});
// })

function closeReveal(drawerReveal, appDrawer) {
    gsap.to(drawerReveal, {
        duration: 0.9,
        x: "0%",
        ease: Power4.easeInOut,
        onComplete: () => {
            gsap.to(appDrawer, { x: "100%", duration: 1 });
        },
    });
}

$('.rahbariyat-info-btn').click(function () {
    var wrap = $(this).closest('.rahbariyat-wrap')
    wrap.find('.rahbariyat-report').slideDown();
});
$('.rahbariyat-report-btn').click(function () {
    var wrap = $(this).closest('.rahbariyat-wrap')
    wrap.find('.rahbariyat-report').slideUp();
});

$('.faq-top').click(function () {
    var wrap = $(this).closest('.faq-block')
    wrap.find('.faq-bottom').slideToggle();
    wrap.find('.faq-top-icon').toggleClass('faq-icon-js')
});



