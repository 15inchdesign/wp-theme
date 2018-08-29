(function($, root, undefined) {

  $(function() {

    'use strict';

    // DOM ready, take it away
    // Handling retina images, I hope so
    retina();

     var url = window.location.href.substr(window.location.href
    .lastIndexOf('/')+1);
     $('.nav ul li a').each(function(){
          if($(this).attr('href') == url || $(this).attr('href') == '' )
          $(this).addClass('active');
     })
  });
})




