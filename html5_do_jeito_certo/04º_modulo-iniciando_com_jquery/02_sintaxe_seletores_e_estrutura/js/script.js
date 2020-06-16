$(function(){
   //tudo no jquery funciona assim:
   //SELETOR, EVENTO, CALLBACK E AÇÃO
   
   
   
   //TRABALHANDO COM SELETORES
  // $('p').click(function(){
       //var texto = $(this).text();//aqui só temos seletor e evento
      //alert(texto);
       
       // alert('click');//essa parte é chamada de callback
   //});
   
   //$('#teste').click(function(){
      // var texto = $(this).text();
       //alert(texto);
   //});
   
   $('.j_alert').click(function(){
       var texto = $(this).text();
       alert(texto);
   });
   
   $('a[title="UpInside Treinamentos"]').click(function(){
       //alert('UpInside!');
       $(this).text($(this).attr('title'));//attr = atributo
       
       return false
   });
});

