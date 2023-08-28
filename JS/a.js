$(document).ready(function(){
    $('#menu').click(function(){
        $(this).toggleClass('fa-times');
        $('.navbar').toggleClass('nav-toggle');
    });

    $('#login').click(function(){
        $('.login-form').addClass('popup');
    });

    $('.login-form form .fa-times').click(function(){
        $('.login-form').removeClass('popup');
    });

    $(window).on('load scroll', function(){
        $('#menu').removeClass('fa-times');
        $('.navbar').removeClass('nav-toggle');
        $('.login-form').removeClass('popup');
    });

    $(".box-btn").on('click', function(){
        $(this).parent().toggleClass("showContent");
        var replaceText=$(this).parent().hasClass("showContent")?"Manje":"Više";
        $(this).text(replaceText);
    });
});


$(document).ready(function(){
    $('.post-container').owlCarousel({
        pagination:false,
        autoplay:true,
        responsive:{
            0:{
               items:1 
            },
            700:{
                items:2
            },
            1000:{
                items:3
            },
            1200:{
                items:4
            }
        }
    })
});
