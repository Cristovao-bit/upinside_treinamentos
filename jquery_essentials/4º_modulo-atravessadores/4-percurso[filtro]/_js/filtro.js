$(function () {
    //FIND
    //filtrando o elemento a partir da classe pai.
    $('.article_content').find('p').css({
        "font-size": '0.875em'
    });
    //filtrando os elementos a partir de uma execução de uma classe.
    $(".article").find(".article_link").on("click", function(){
        $(this).parent().find(".article_content p").toggleClass("active");
        $(this).toggleClass("active");
        return false;
    });
    
    //NEXT E NEXTALL
    //aplicando a classe depois do primeiro p.
    $(".article_content p:first").next().addClass("active");
    //aplicando a classe a todos depois do primeiro p.
    $(".article_content p:first").nextAll().addClass("active");
    
    //PREV E PREVALL
    //removendo classe no segundo elemento
    $(".article_content p:last").prev().removeClass("active");
    //adicionando classe em todos os elementos
    $(".article_content p:last").prevAll().addClass("active");
    
    //UNTIL
    //nesse exemplo clonei a primeiro paragrafo e adiconei na ultima linha.
    $(".article_content p:first").clone().appendTo(".article_content");
    //acabe de clonar o primeiro paragrafo e removi a clase adicionado a ele e adicionei ele no final da listra.
    $(".article_content p:first").clone().removeClass("active").appendTo('.article_content');
    $(".article_content p:first").clone().appendTo('.article_content');
    
    //$(".article_content p").nextUntil().fadeOut(2000);
    //$(".article_content p").nextUntil(".active").fadeOut(2000);
    //$(".article_content p").nextUntil("", ".active").fadeOut(2000);
    
    //$(".article_content p:last").prevUntil().fadeOut(2000);
    //$(".article_content p:last").prevUntil(".active").fadeOut(2000);
    $(".article_content p:last").prevUntil("", ".active").fadeOut(2000);
});