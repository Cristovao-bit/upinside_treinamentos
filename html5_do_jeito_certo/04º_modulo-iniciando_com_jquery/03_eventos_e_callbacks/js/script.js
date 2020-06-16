$(function(){
   //EVENTOS
   // $('.j_mouseover').hover(function(){
       // alert('Passou o mouse no H1. Seu texto é ' + $(this).text());
    //});
    
     $('.j_mouseover').mouseenter(function(){
      alert('Passou o mouse no H1. Seu texto é ' + $(this).text());
    });
    
    $('.j_keyup').keyup(function(){
        var texto = $(this).val();//val aqui porque ele não tem um texto e sim um valor
        //$('.j_empresa').text(texto);
        $('.j_empresa').html(texto);
    });
});

