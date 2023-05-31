jQuery(document).ready(() =>{
   jQuery(".slider-before-and-after").slick({
        slidesToShow: 4,
        slidesToScroll: 4, 
        autoplay: true,
        autoplaySpeed: 2000,
    })
    jQuery(".custom-review").slick({
        slidesToShow: 1,
        slidesToScroll: 1, 
    })
})