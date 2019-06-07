jQuery(document).ready( function($){
	
	/*$('.upper-silder').owlCarousel({
        items:2,
        loop:true,
        margin:3,
        nav: true,
        dots: false,
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause:true,
        animateOut: true,
        animateIn: true,
    });

    $('.down-silder').owlCarousel({
        items:3,
        loop:true,
        margin:3,
        nav: false,
        dots: false,
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause:true,
        animateOut: 'fadeOut',
        animateIn: true,
    });*/

    $('.upper-silder').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        asNavFor: '.down-silder',
        arrows: false,
        mobileFirst: true,
       /* autoplay: true,
        autoplaySpeed: 3000,*/
     });
     $('.down-silder').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      asNavFor: '.upper-silder',
      arrows: true,
      prevArrow:'.arrow-prev',
      nextArrow:'.arrow-next',
      mobileFirst: true,
      /* autoplay: true,
        autoplaySpeed: 3000,*/
      
    });

    $('.cats-carousel').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: false,
        arrows: false,
        mobileFirst: true,
       /* autoplay: true,
        autoplaySpeed: 3000,*/
     });

    $('.latest-news').easyTicker({
        direction: 'up',
        easing: 'swing',
        speed: 'slow',
        interval: 2000,
        height: 'auto',
        visible: 1,
        mousePause: 1,
        controls: {
            up: '',
            down: '',
            toggle: '',
            playText: 'Play',
            stopText: 'Stop'
        }
    });

});