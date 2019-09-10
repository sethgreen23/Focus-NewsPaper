jQuery(document).ready( function($){

    $('.upper-silder').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        asNavFor: '.down-silder',
        arrows: false,
        mobileFirst: true,
        autoplay: true,
        autoplaySpeed: 3000,
        responsive: [
          {
            breakpoint: 576,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
            }
          },
          {
            breakpoint: 767,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
            }
          },
          {
            breakpoint: 992,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
            }
          },
        ]
     });
     $('.down-silder').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      asNavFor: '.upper-silder',
      arrows: true,
      prevArrow:'.arrow-prev',
      nextArrow:'.arrow-next',
      mobileFirst: true,
      autoplay: true,
      autoplaySpeed: 3000,
      responsive: [
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          }

        },
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          }
        },
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          }
        },
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
          }
        },
      ]
    });

    $('.cats-carousel').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: false,
        arrows: false,
        mobileFirst: true,
        autoplay: true,
        autoplaySpeed: 3000,
        responsive: [
        {
          breakpoint: 400,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          }
        },
        {
          breakpoint: 575,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          }
        },
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          }
        },
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
          }
        },
      ]
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

    window.onload = function() { 
      clock(); 
    function clock() {
    var now = new Date();
    var TwentyFourHour = now.getHours();
    var hour = now.getHours();
    var min = now.getMinutes();
    var sec = now.getSeconds();
    var mid = 'PM';
    if (min < 10) {
      min = "0" + min;
    }
    if (hour > 12) {
      hour = hour - 12;
    }    
    if(hour == 0){ 
      hour = 12;
    }
    if(TwentyFourHour < 12) {
       mid = 'AM';
    }     
    document.getElementById('timeNow').innerHTML = hour+':'+min+':'+sec +' '+mid ;
        setTimeout(clock, 1000);
    }
  }
    
    $('.single-carousel').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      asNavFor: false,
      arrows: false,
      mobileFirst: true,
      autoplay: true,
      autoplaySpeed: 3000,
      responsive: [
        {
          breakpoint: 400,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          }
        },
        {
          breakpoint: 575,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          }
        },
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          }
        },
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
          }
        },
      ]
   });

  

  $('.silder-content').slick({
    slidesToScroll: 1,
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: 'linear',
    prevArrow:'.arrow-prev',
    nextArrow:'.arrow-next',

  });




   /* contact form submission */
    $('#foucsContactForm').on('submit', function(e){
      e.preventDefault();
    

      $('.has-error').removeClass('has-error');
      $('.js-show-feedback').removeClass('js-show-feedback');

      var form = $(this),
          name    = form.find('#name').val(),
          email   = form.find('#email').val(),
          message = form.find('#message').val(),
          ajaxurl = form.data('url');

          if( name === '' ){
            $('#name').parent('.form-group').addClass('has-error');
            return;
          }
      
          if( email === '' ){
            $('#email').parent('.form-group').addClass('has-error');
            return;
          }
      
          if( message === '' ){
            $('#message').parent('.form-group').addClass('has-error');
            return;
          }
      
          form.find('input, button, textarea').attr('disabled','disabled');
          $('.js-form-submission').addClass('js-show-feedback');
          
          $.ajax({
        
              url : ajaxurl,
              type : 'post',
              data : {
                
                name : name,
                email : email,
                message : message,
                action: 'foucs_save_user_message_contact_form'
                
              },
              error : function( response ){
                $('.js-form-submission').removeClass('js-show-feedback');
                $('.js-form-error').addClass('js-show-feedback');
                form.find('input, button, textarea').removeAttr('disabled');
              },
              success : function( response ){
                if( response == 0 ){
                  
                  setTimeout(function(){
                    $('.js-form-submission').removeClass('js-show-feedback');
                    $('.js-form-error').addClass('js-show-feedback');
                    form.find('input, button, textarea').removeAttr('disabled');
                  },1500);
        
                } else {
                  
                  setTimeout(function(){
                    $('.js-form-submission').removeClass('js-show-feedback');
                    $('.js-form-success').addClass('js-show-feedback');
                    form.find('input, button, textarea').removeAttr('disabled').val('');
                  },1500);
        
                }
              }
          });

    });






    

});