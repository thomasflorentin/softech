

jQuery(function($){

    console.log('hello');

    $('.gallery').slick( {
        adaptiveHeight: false,
        infinite: true,
        slidesToShow: 1,
        centerMode: true,
        slidesToShow: 1,
        centerPadding: '15%',
        prevArrow: '<a class="slick-prev"><span><</span><p>précédent</p></a>',
        nextArrow: '<a class="slick-next"><span>></span><p>suivant</p></a>',
        autoplay: true,
    });


    console.log('goodbye');

});
