$(function(){
    $("[class]").css("background", "#ccc");
    
    $("[data-upinside='true']").css("background", "#006699");
    
    $("a[title!='UpInside']").css({
        padding: "2px",
        background: "#f00",
        "text-decoration": "none"
    });
    
    $("[class^='jquery']").css("background", "#0099ff");
    
    $("[class$='div']").css("color", "#fff");
    
    $("[class*='r']").css("font-weight", "bold");
    
    $("[class~='jquery']").css("text-transform", "uppercase");
    
    //Selecionando o elemento em si!
    $("[class|='jquery-essentials']").css("border-bottom", "3px solid #fbc02d");
    
    $("[class*='jquery'][data-upinside]").css("color", "pink");
});