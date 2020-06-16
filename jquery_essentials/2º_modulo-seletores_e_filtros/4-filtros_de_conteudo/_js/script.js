$(function(){
    //selecionando tags com conteudo!
    $("p:parent").css("background", "#f00");
    
    //transformando tags sem conteudo!
    $("p:empty").html("<b>Este está vazio!</b>");
    
    //Ocorrência de palavras
    $("p:contains(Essentials)").css("color", "#fff"); 
    
    $("p:has(b)").text("É este aqui, carai!");
});