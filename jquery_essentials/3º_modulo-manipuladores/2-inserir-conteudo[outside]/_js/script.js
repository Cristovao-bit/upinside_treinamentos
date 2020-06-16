$(function(){
    var title = $("title").text();
    $(".j").before("<h1>" + title + "</h1>");
    $("<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>").insertBefore($(".j"));
    
    var old_text = "<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard <b>dummy text ever since the 1500s</b>, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>"
    $(".j").after(old_text);
    $(".j").after("<a class='a' href='#!'>Continue lendo...</a>");
    $(".a").insertAfter("p:last");
});