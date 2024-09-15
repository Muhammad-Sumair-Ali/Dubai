$(document).ready(function(){
    $('.carousel').slick({
        autoplay: true,  // Enable autoplay
        autoplaySpeed: 3000,  // Set autoplay speed in milliseconds
        arrows: true,  // Enable navigation arrows
        prevArrow: '<button type="button" class="slick-prev">Previous</button>',
        nextArrow: '<button type="button" class="slick-next">Next</button>',
        dots: true  // Enable pagination dots
    });
});
