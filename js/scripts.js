$(document).ready(function(){
    $("#slideshow > div:gt(0)").hide();
    
    setInterval(function() { 
  $('#slideshow > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#slideshow');
},  10000);
    $('input').focus(function(){
     $(this).css('outline-color','#fe6f61');
  });
    });