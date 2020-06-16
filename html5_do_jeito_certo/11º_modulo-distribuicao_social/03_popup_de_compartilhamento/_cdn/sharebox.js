$(function(){
    BASE = $('link[rel="base"]').attr('href');
    
    
    if($('.sharebox').length >= 1){
      //SHARE :: FACEBOOK
      $('.facebook a').click(function(){
          var share = 'https://www.facebook.com/sharer/sharer.php?url=';
          var urlOpen = $(this).attr('href');
          window.open(share + urlOpen, '_blank', "toolbar=yes, scrollbars=yes, resizable=yes, width=660, height=400");
          
          return false;
      });
     
       //SHARE :: GOOGLE+
      $('.google a').click(function(){
          var share = 'https://plus.google.com/share?url=';
          var urlOpen = $(this).attr('href');
          window.open(share + urlOpen, '_blank', "toolbar=yes, scrollbars=yes, resizable=yes, width=516, height=400");
          
          return false;
      });
      
       //SHARE :: TWITTER
      $('.twitter a').click(function(){
          var share = 'https://twitter.com/share?url=';
          var urlOpen = $(this).attr('href');
          var complemente = $(this).attr('rel');
          window.open(share + urlOpen + complemente, '_blank', "toolbar=yes, scrollbars=yes, resizable=yes, width=660, height=400");
          
          return false;
      });
    }
    
});


