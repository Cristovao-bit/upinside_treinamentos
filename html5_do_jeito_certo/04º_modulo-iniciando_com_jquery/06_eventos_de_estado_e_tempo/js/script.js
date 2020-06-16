$(function(){
  $('a').click(function(){
      //deletaPost($(this).attr('rel'));
      
      return false;
  });
  
  $( window ).load(function(){
      //callback e tempo
      //setTimeout(function(){
         // alert('Completo!');
      //}, 2000);       
      var tempo = setInterval(function(){
          $('a').fadeToggle(function(){
              location.reload();
          });
      }, 200); 
      
      $('a').click(function(){
          clearInterval(tempo);
      });
  });
  
  function deletaPost(postId){
      var alerta = confirm('Tem Certeza que Quer Deletar?');
      if(alerta === true){
         // alert(postId);
         //$('#22').fadeOut();
         //$('#' + postId).fadeOut();
         $('#' + postId).fadeOut(function(){
             alert('Post Removido com Sucesso!');
         });
      }else{
          alert('NO!');
      }
  }
  
});

