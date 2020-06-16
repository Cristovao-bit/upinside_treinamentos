$(function(){
   //SELETORES, EVENTOS, CALLBACKS E AÇÃO
   //O QUE VAI MUDAR AGORA É SELETORES, EFEITOS, CALLBACKS E AÇÃO
   $('.a').click(function(){
       $('.b').fadeOut(200, function(){
           $(this).show();
       });
       return false;
   });
   
});

