$(function () {
    //each é um foreach no jquery
    //i de indice
    //el de elemento
    $.each($("p"), function(i, el){
        var el = $(el);
        el.html(el.html() + " - " + i);
    });
    
    $("p").eq(1).css("color", "#f00");
    $("p").eq(2).css("color", "#fbc02d");
    $("p").first().css("color", "#555");
    $("p").last().css("color", "#fff");
    
    $("p").slice(0, 4).css({
        background: "#000",
        padding: "10px"
    });
});
