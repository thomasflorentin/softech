

jQuery(function($){

    console.log('hello');

    $('.gallery').slick( {
        adaptiveHeight: false,
        infinite: true,
        slidesToShow: 1,
        centerMode: true,
        slidesToShow: 1,
        centerPadding: '20%',
        prevArrow: '<a class="slick-prev"><</a>',
        nextArrow: '<a class="slick-next">></a>',

    });


    console.log('goodbye');

});
