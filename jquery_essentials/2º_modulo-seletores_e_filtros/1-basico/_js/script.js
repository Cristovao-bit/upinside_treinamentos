$(function(){
    //SELETOR DE ELEMENTO
    $("b").text("jQuery Essentials");
    
    //SELETOR DE CLASSE
    $(".jquery").css("color", "#f00");
    
    //SELETOR DE ID
    $("#jquery").text("Id = jQuey");
    
    //SELETOR DE TUDO
    $("div *").css("border", "1px solid #555");
    
    //SELETOR MULTIPLO
    $(".jquery, b").css({
        color: '#000',
        background: '#fbc02d',
        'border-radius': "4px",
        padding: "10px",
        "font-size": "1.4em"
    });
    
    //SELETOR MULTIPLO ALTERNATIVO
    $('b').add('p').css("font-size", "2em");
});