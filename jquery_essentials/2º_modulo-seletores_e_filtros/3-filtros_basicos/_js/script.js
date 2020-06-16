$(function(){
    $("p:not(.p)").css("font-weight", "bold");
    
    $("p:first").css("color", "#f00");
    $("p:last").css("color", "#f00");
    
    $("p:even").css("background", "#eee");
    $("p:odd").css("background", "#ccc");
    
    $("p:eq(4)").text("jQuery Essentials");
    $("p:gt(4)").text("Seletores GT");
    $("p:lt(4)").text("Seletores LT");
    
    $(".list :header").css({
        "font-size": "1.4em",
        color: "#888"
    });
    
    $(".list :header span").css("color", "#f00");
    
    function animar_el(elemento){
        $(elemento).fadeToggle(400, function(){
            animar_el(elemento);
        });
    }
    
    var num = 1;
    setInterval(function(){
        $(":animated").text(num);
        num++;
    }, 800);
    
    animar_el(".list span");
    
    $(":focus").css('padding', "10px");
    
    console.log($(":root"));
});