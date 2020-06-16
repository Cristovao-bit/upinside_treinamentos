$(function(){
    $("p").wrapAll("<div>");
    
    $("p").wrapInner("<span>");
    
    $("span").unwrap("p");
    
    $("span").wrap("<h2>");
});