$(function(){
  $('a').click(function(){
      deletaPost($(this).attr('rel'));
      return false;
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

