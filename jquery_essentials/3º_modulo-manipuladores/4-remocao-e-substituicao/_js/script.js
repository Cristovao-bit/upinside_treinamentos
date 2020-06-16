$(function(){
//    $('.b').fadeOut(5000, function(){
//        $(this).remove();
//    });

    $(".b").remove();
    
    $(".d").empty();
    setTimeout(function(){
        $(".d").text("#BoraProgramar!");
    }, 3000);
    
    $("p").on("click", function(){
        $(this).toggleClass("active");
    });
    
    var p;
    
    $(".button").on("click", function(){
        if(p){
            p.appendTo(".r");
            p = null;
        }else{
            p = $("p").detach();
        }
    });
    
    var href = $(".e").text();
    
    $(".e").replaceWith("<p><a target='_blank' href='https://" + href + "'>" + href + "</a></p>");
    
    $("<p>#BoraProgramar!</p>").replaceAll("p");
});