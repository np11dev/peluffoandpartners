var thisite = {};

thisite.homepage = function () {
    jQuery('#playvideo_btn').on('click', function (event) {
        document.getElementById('bgvid').play();
    });
    /* jQuery('.showcase_contenitore').slick({
           dots: true,
           arrows: true,
           infinite: true,
           speed: 300,
           slidesToShow: 1
     });
     jQuery('.sections').slick({
           //centerMode: true,
           centerPadding: '0px',
           slidesToShow: 4,
           responsive: [
             {
               breakpoint: 768,
               settings: {
                 arrows: false,
                 centerMode: true,
                 centerPadding: '40px',
                 slidesToShow: 2
               }
             },
             {
               breakpoint: 480,
               settings: {
                 arrows: false,
                 centerMode: true,
                 centerPadding: '40px',
                 slidesToShow: 1
               }
             }
           ]
     });
     
     jQuery('.linkurl')
         .mouseenter(function() {
             jQuery(this).parent().addClass('mouseover');
         })
         .mouseleave(function() {
             jQuery(this).parent().removeClass('mouseover');
         });*/

}
thisite.gestionemenu = function () {
    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 140) {
            jQuery('body').addClass("scrolled");
        } else {
            jQuery('body').removeClass("scrolled");
        }
    });
}


thisite.fn_hamburger = function () {
    jQuery('.menu_btn').on('click', function (event) {
        //jQuery('.menu-main-container').toggle(500);
        //jQuery('.menu_container').slideToggle( "slow", function() {
        // Animation complete.
        //});
        /*
        jQuery('.menu_container').fadeToggle( "slow", function() {
            // Animation complete.
        });
        */
        //jQuery('.menu-main-container').toggle(500);
        if (jQuery('body').hasClass('menu_aperto')) {
            jQuery('body').removeClass('menu_aperto');
            jQuery('body').addClass('menu_chiuso');
            //document.getElementById('bgvid').play();

        } else {
            jQuery('body').addClass('menu_aperto');
            jQuery('body').removeClass('menu_chiuso');

            //document.getElementById('bgvid').pause();
        }
    });
}
thisite.gestione_accordion_semplice = function () {
    jQuery('.blocco_accordion ul > li > h2').on('click', function (event) {
        jQuery(this).parent().find('.testo').slideToggle(550, function () {
            // Animation complete.
        });
        if (jQuery(this).parent().hasClass('menu_aperto')) {
            jQuery(this).parent().removeClass('menu_aperto');
            jQuery('body').addClass('menu_chiuso');

        } else {
            jQuery(this).parent().addClass('menu_aperto');
            jQuery('body').removeClass('menu_chiuso');

        }
    });
}

thisite.lazyload = function () {
    //jQuery("img.lazyimg").lazyload({effect : "fadeIn"});
    //$("div.lazy_backdrop").lazyload({effect : "show"});
}
thisite.slick_start = function () {
    jQuery('.imgetext.slick').slick({
        dots: true,
        arrows: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1
    });
    jQuery('.prodotti_blocco ul.slick').slick({
        dots: true,
        arrows: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        adaptiveHeight: true
    });


}

thisite.intro = function () {
    function myRepeat() {
        $('a.pollice img').fadeTo(1500, 0.3, function () {
            $('a.pollice img').fadeTo(1500, 1);
        });
    }
    setInterval(myRepeat, 9000);
}

jQuery(document).ready(function () {
    //if ( jQuery("body").hasClass("home") ) {

    thisite.intro();

    thisite.homepage();
    //thisite.gestionemenu();
    //thisite.gestione_accordion_semplice();
    //thisite.slick_start();
    //}
    thisite.fn_hamburger();
    //magventura.lazyload();
});