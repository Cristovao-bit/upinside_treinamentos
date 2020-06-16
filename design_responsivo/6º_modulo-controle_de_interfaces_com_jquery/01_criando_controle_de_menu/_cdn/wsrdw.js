$(function(){
    Shadowbox.init()
    
    //CONTROLE DO MENU MOBILE
    $('.mobile_action').click(function(){
        if(!$(this).hasClass('active')){
            $(this).addClass('active');
            $('.main_header_nav').animate({'left': '0px'}, 300);
        }
        else{
            $(this).removeClass('active');
             $('.main_header_nav').animate({'left': '-100%'}, 300);
        }
    });

});


