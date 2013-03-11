console.log(Drujax);
(function($){
  $(document).ready(function(){
    Drujax.setHandler(function(data,path){
      
      $("#drujax-main").animate({marginLeft:-$(window).width()},500,function(){
          data = jQuery.parseJSON(data);
          document.title = data.title;
          for(var i in data.content){
            $(i).html(data.content[i]);
          }
          $(this).animate({marginLeft:0},500);
      });

    })
  })

  
})(jQuery)