$(function(){
   var s=0;
  setInterval(function(){
      s++;
      console.log(s);
      if(s >= 5){
          console.clear();
      };
      $('.j_time').text(s);
  }, 1000);
  
});
 

