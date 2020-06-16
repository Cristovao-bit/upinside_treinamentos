$(function(){
    //MANIPULADORES DE LARGURA
    console.group("W");
    console.log($("div:first").width());
    console.log($("div:first").innerWidth());
    console.log($("div:first").outerWidth());
    console.groupEnd();
    
    //MANIPULADORES DE ALTURA
    console.group("H");
    console.log($("div:first").height());
    console.log($("div:first").innerHeight());
    console.log($("div:first").outerHeight());
    console.groupEnd();
    
    $("div").css("float", "left").outerWidth("50%");
    
    var h = 0;
    $("div").each(function(i, el){
        if($(el).outerHeight() > h){
            h = $(el).outerHeight();
        }
    }).outerHeight(h);
});