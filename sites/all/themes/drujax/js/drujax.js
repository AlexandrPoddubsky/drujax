(function($){
  var init = true, 
      state = window.history.pushState !== undefined;
  
  var Drujax = (function(){
    var p = {};
    
    var _handler = function(data) {
      data = jQuery.parseJSON(data);
      document.title = data.title;
      console.log(data.title)
      
      for(var i in data.content){
        $('#'+i).html(data.content[i]);
      }
    };
    
    p.handler = function(data,path){
      if(!path.match("^.*overlay.*")){
        _handler(data,path);
      }
    }
    
    p.setHandler = function(func){
      _handler = func;
    };
    
    return p;
  })();
  
  $.address.state('').init(function() {
      $('a:not(.admin-link)').address();
  }).change(function(event) {

      $('a:not(.admin-link)').each(function() {
          if ($(this).attr('href') == ($.address.state() + event.path)) {
              $(this).addClass('selected');
          } else {
              $(this).removeClass('selected');
          }
      });

      if (state && init) {

          init = false;

      } else {

          // Loads the page content and inserts it into the content area
          $.ajax({
              url: $.address.state() + event.path+"?ajax=1",
              error: function(XMLHttpRequest, textStatus, errorThrown) {
                  Drujax.handler(XMLHttpRequest.responseText,event.path);
              },
              success: function(data, textStatus, XMLHttpRequest) {
                  Drujax.handler(data,event.path);
                  
              }
          });
      }

  });
})(jQuery)
