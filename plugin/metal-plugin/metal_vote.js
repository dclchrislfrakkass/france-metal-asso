
jQuery(document).ready(function($) {
    $('body').prepend(shadow);
  
    var shadow = $('<div id="shadowElem"></div>');
      var speed = 1000; //animation speed
  
      $(window).load( function() {
          screenHeight = $(window).height();
          screenWidth = $(window).width();
          elemWidth = $('#dropElem').outerWidth(true);
          elemHeight = $('#dropElem').outerHeight(true)
  
          leftPosition = (screenWidth / 2) - (elemWidth / 2); 
          topPosition = (screenHeight / 2) - (elemHeight / 2);
  
              //place drop element on top middle of screen
              $('#dropElem').css({
                  'left' : leftPosition + 'px',
                  'top' : -elemHeight + 'px'
              });
              //some animation .. coming down from top
              $('#dropElem').show().animate({
                  'top' : topPosition
              }, speed);
      //change opcity of shadow element
      shadow.animate({
          'opacity' : 0.7
      }, speed);
      //close button 
      $('#dropClose').click( function() {
          shadow.animate({
              'opacity' : 0
          }, speed);
          $('#dropElem').animate({
              'top' : -elemHeight + 'px'
          }, speed, function() {
              shadow.remove();
              $(this).remove();
          });
      });
  });
  });  