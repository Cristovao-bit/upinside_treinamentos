$(function () {
    //CHILDREN
    //Children é um atravessador que pega todos os filhos do elemento que eu quero selecionar de um pai.
    $('.article').children().css("font-family", "Open Sans, sans-serif");
    $('.article').children('.article_content').css("margin-bottom", "30px");
    $('.article_content').children('p').css('font-size', '0.8em');
    
    //SIBLING
    $('.article_content p').siblings().css("color", "#fff");
    $('.article_content p').siblings('.a').css("color", "#09f");
    
    //PARENT
    $('.article_content b').parent().css({
        padding: "10px",
        background: "#555"
    }).parent("div").css({
        "padding-bottom": "15px",
        "border-bottom": "5px solid #eee"
    });
    
    $('p').on('click', function(){
        //$(this).parents().toggleClass('active');
        $(this).parents("body").toggleClass('active');
        
        var data = new Date();
        $('.date').remove();
        $(this).parents("div:last").append("<div class='date'>" + data.getUTCDate() + '/' + data.getUTCMonth() + '/' + data.getUTCFullYear() + '</div>');
        
        //parents seleciona sem precisar passar um elemento
        console.log($(this).parents());
    });
    
    //closest seleciona só se passar um elemento, ou seja, tenho que delimitar o elemento que quero selecionar.
    $('b').closest('p').css("border-top", "1px solid #09f");
    
    //PARENT UNTIL
    console.log("UNTIL");
    console.log($('.a').parents('.article')); //volta até
    console.log($('.a').parentsUntil('.article')); //parentes de article [EL]
    console.log($('.a').parentsUntil('body', 'article')); //parentes de article [EL, FILTRO]
});
