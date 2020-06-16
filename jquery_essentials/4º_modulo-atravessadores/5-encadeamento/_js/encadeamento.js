$(function () {
    var el = $(".article");
    
    //formatando o elemento
//    el.css({
//        "font-family": "Open Sans, sans-serif",
//        "font-size": "1em",
//        "margin-botton": "20px"
//    }).find(".article_content p").css({
//        "font-size": "0.8em"
//    });
    
    //formatando o elemento.
    el.css({
        "font-family": "Open Sans, sans-serif",
        "font-size": "1em",
        "margin-botton": "20px"
    }).end().add(".article_content p").css({
        "font-size": "0.8em"
    });
    
    var btn = "<p class='more load'>Carrregar mais um ...</p>";
    $(btn).appendTo(el.parent());
    
    $("body").on("click", ".more", function(){
        $(this).stop().fadeOut(100, function(){
            $(".article:last").clone().add(btn).css("display", "none").appendTo($(".article:last").parent()).slideDown(300, function(){
                $("html, body").stop().animate({scrollTop: $(this).offset().top}, 1000);
            });
        });
        
        console.clear();
        console.log($(".article").add());
        console.log($(".article").addBack());
    });
});