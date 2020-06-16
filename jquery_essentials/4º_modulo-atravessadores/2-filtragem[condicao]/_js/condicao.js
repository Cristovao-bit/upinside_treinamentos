$(function () {
    //IS
    $("p").on("click", function(){
        console.clear();
        
        if($(this).is(".j")){
            console.log("TRUE");
        }else{
            console.log("FALSE");
        }
        
        //::first-of-type (primeiro deste paragrafo que eu estou clicando
        if($(this).is(":first-of-type")){
            console.log("FIRST");
        }
    });
    
    //HAS
    //Verificação de um paragrafo que tenha um span
    $("p").has("span").append("<sup>HAS SPAN</sup>");
    
    //NOT
    //O que estiver com a palavra jquery não será pintado com a cor vermelha
    $("p").not(":contains('jQuery')").css("color", "#f00");
    
    //também posso fazer o mesmo exemplo a cima citado usando a posição dele.
    $("p").not(":eq(2)").css("border", "1px solid #f00");
    
    //FILTER
    //O exemplo a seguir vai conter a inversão do exemplo a cima citado, ou seja,
    //agora vou selecionar o elemento que tenha a palavra jQuery.
    $("p").filter(":contains('jQuery')").css({
        color: "#f00",
        border: "1px solid #f00"
    });
    
    $("p").css({
        padding: "10px",
        background: "#eee"
    }).filter(function(index){
        return index % 2 === 1;
    }).css({
        color: "#fff",
        background: "#f00"
    });
    
    //MAP
    //O join é como eu quero que o elemento fique
    var mapa = $("p").map(function(indice, elemento){
        console.log($(elemento));
        return "<p>" + indice + " - " + $(elemento).text() + "</p>";
    }).get().join("");
    
    $("<div>" + mapa + "</div>").appendTo("body");
});