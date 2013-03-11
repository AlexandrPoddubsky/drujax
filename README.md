drujax
======

Drupal ajax module.

Drujax adds a seperate page--drujax.tpl.php file which is rendered on ajax requests without html.tpl.php and page.tpl.php
and loads the full page on normal requests. 

Drujax also makes use of jquery address push states. Every content link will be automaticly rendered with ajax.
You can also hook into ajax handler to create your own animations and set the ajax data when you want.
For Example:


Drujax.setHandler(function(data){
      data = jQuery.parseJSON(data);
      document.title = data.title;
      for(var i in data.content){
        $(i).html(data.content[i]);
      }
});
