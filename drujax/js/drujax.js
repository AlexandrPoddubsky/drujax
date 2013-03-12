
  var Drujax = (function(){
    var p = {};
    
    var _handler = function(data,path) {
      for(var i in data.content){
        jQuery(i).html(data.content[i]);
      }
    };
    
    p.handler = function(data,path){
      document.title = data.title;
      if(!path.match("^.*overlay.*")){
        _handler(data,path);
      }
    };
    
    p.setHandler = function(func){
      _handler = func;
    };
    
    return p;
  })();
  
  
(function($){
  $.fn.drujax = function(fn){
      console.log("test");
        var sel;
        if (typeof fn === 'string') {
            sel = fn;
            fn = undefined;
        }
        if (!$(this).attr('address')) {
            var f = function(e) {
                if (e.shiftKey || e.ctrlKey || e.metaKey || e.which === 2) {
                    return true;
                }
                if ($(this).is('a')) {
                    
                    var value = fn ? fn.call(this) : 
                        /address:/.test($(this).attr('rel')) ? $(this).attr('rel').split('address:')[1].split(' ')[0] : 
                        $.address.state() !== undefined && !/^\/?$/.test($.address.state()) ? 
                                $(this).attr('href').replace(new RegExp('^(.*' + $.address.state() + '|\\.)'), '') : 
                                $(this).attr('href').replace(/^(#\!?|\.)/, '');
                        
                    if(value.indexOf("/admin")!== 0 && value.indexOf("/user")!== 0 && value.indexOf("/add")< 0 && value.indexOf("/edit")< 0 && value.indexOf("/delete")< 0) {
                      e.preventDefault();
                      $.address.value(value);
                    }else{
                      return true;
                    }
                    
                }
            };
          
            $(sel ? sel : this).live('click', f);
        }
        return this;
  };

  var init = true, 
      state = window.history.pushState !== undefined;
  
  $.address.state('').init(function() {
      $('a').drujax();
  }).change(function(event) {
  
      $('a:not(.admin-link)').each(function() {
          if ($(this).attr('href') === ($.address.state() + event.path)) {
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
})(jQuery);
