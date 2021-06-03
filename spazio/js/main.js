$(document).ready(function() {
    $(".search_bar .fa").on('click', function(){
          $(".search_bar").toggleClass('active');
    });



	 /*----------------menu--------------------*/
    $('.menu_icon').on('click', function(){
		$('.menu_icon').toggleClass('active');
		$('.mob_sidebar').toggleClass('active');
		$('body').toggleClass('mob_body');
    });
    /*---------------- end_menu--------------------*/

    /*magnific popap*/
      $('.popup-content').magnificPopup({
          removalDelay: 900,
          type: 'inline'
      });

    $('.top_slider').owlCarousel({
        margin:10,
        autoplay:true,
        loop:true,
        autoplayTimeout:3000,
        nav:false,
        dots:true,
        items:1
    });

      $('.slider_card').owlCarousel({
        margin:10,
        autoplay:true,
        loop:true,
        autoplayTimeout:3000,
        nav:false,
        dots:true,
        items:1
    });



    $('.contact_slider').owlCarousel({
        margin:10,
        autoplay:true,
        loop:true,
        autoplayTimeout:3000,
        nav:true,
        dots:false,
        items:1
    });

    $('.language-select').click(function(){
        $(this).toggleClass('open');
        });

    $('.language-select li').click(function(){
    var setLang = $('.language-select').data('location'),
        dataLangSelect = $(this).data('lang')
          $('.language-select').data('location', dataLangSelect);
          $('.language-select li').removeClass('active');
          $(this).toggleClass('active');
    });



  
});