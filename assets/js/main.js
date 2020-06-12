$(document).ready(function(){
    // Preloader
    $(window).on('load',function(){
        $('#preloader').fadeOut(1000);
    });

    //Navbar
    let marker = $('.marker');
    let navLink = $('.menu ul li a');
    let burger = $('header .toggle');
    navLink.click(function(){
        let margin = parseInt($(this).css('margin-left'));
        let marginTop = parseInt($(this).css('margin-top'));
        marker.css({'width':$(this).innerWidth()+'px','left':$(this).position().left+margin+'px'});
        marker.css({'height':$(this).innerHeight()+'px','top':$(this).position().top+marginTop+'px'});
        navLink.css('color','#fff');
        $(this).css('color', '#000');
        $('header .menu').toggleClass('active');
        if($('header .toggle').hasClass('active')){
            $('header .toggle').removeClass('active');
        }
    });

    $(window).scroll(function(){
        if($(this).scrollTop() > 10){
            $('header').addClass('active');
        }
        else{
            $('header').removeClass('active');
        }
    });

    burger.click(function(){
        $('header .menu').toggleClass('active');
        $('header .toggle').toggleClass('active');
    });
});