$(function(){
    $("div p").css("color", "#f00");
    
    $("body *").css({
        display: "block",
        "margin-botton": "10px"
    });
    
    $("article > p").css("color", "#fbc02d");
    
    $("div + *").css("background", "#555");
    
    $("div ~ p").text("Irmão");
});