
// $('#banner .owl-carousel').owlCarousel({
//     loop:true,
//     responsiveClass:true,
//     autoplay:true,
//     items:1
// });

// --chose img 
$('.anh1').click(function() {
    var images = $(this).attr('src');
    $('#img-choosed').attr('src',images);
});

$('#owl-banner-footer.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay:true,
autoplayTimeout:3000,
autoplayHoverPause:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
});


function up(max) {
    document.getElementById("myNumber").value = parseInt(document.getElementById("myNumber").value) + 1;
    if (document.getElementById("myNumber").value >= parseInt(max)) {
        document.getElementById("myNumber").value = max;
    }
}
function down(min) {
    document.getElementById("myNumber").value = parseInt(document.getElementById("myNumber").value) - 1;
    if (document.getElementById("myNumber").value <= parseInt(min)) {
        document.getElementById("myNumber").value = min;
    }
}

// ---------click nav-cart -show 
$('.icon-cart-menu').click(function(){
    alert('áda');
});
$('.icon').click(function () {
    
});
// $(document).ready(function() {
//     $(window).bind('scroll', function() {
//         alert('asda');
//         var navHeight = 350;
//         if ($(window).scrollTop() > navHeight) {
//             $('.menu').addClass('menu-active');
//         } else {
//             $('.meu').removeClass('menu-active');
//         }
//     });
// });


    $(document).ready(function() {
        $(window).bind('scroll', function() {
            var navHeight = 150;
            if ($(window).scrollTop() > navHeight) {
                $('.menu').addClass('menu-active');
            } else {
                $('.menu').removeClass('menu-active');
            }
        });
    });


    $('.icon-toggle').click(function(event) {
        if ($('.nav-menu-mobi').hasClass('nav-menu-mobi-active')) {
            
            $('.nav-menu-mobi').removeClass('nav-menu-mobi-active');
        }else{
            $('.nav-menu-mobi').addClass('nav-menu-mobi-active');
        }
    });