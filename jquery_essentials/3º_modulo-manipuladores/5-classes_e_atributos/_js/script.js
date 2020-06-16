$(function(){
    $("p").css("color", "#006699");
    
    $("p").css({
        color: "#555"
    });
    
    $(".segundo").attr("id", "segunda-feira");
    console.log($(".segundo").attr("id"));
    
    console.warn($("input").prop("checked"));
    console.warn($("input").attr("checked"));
    
    $("input").val("nome completo");
    console.warn($("input").val());
    
    $(".segundo").clone().appendTo("body").html("<b>#BoraProgramar!</b>");
    
    $("div").on("click", function(){
        if($(this).hasClass("add")){
            $(this).removeClass("add");
            $(this).find("p").slideUp();
            $("input").removeAttr("checked");
        }else{
            $(this).addClass("add");
            $(this).find("p").slideDown();
            $("input").attr("checked", "checked");
        }
    });
});