
$('.buttonTabel').click(function(e){
    buttonPress( this, e );
  });
  
  var buttonPress = (function(elem, event){
      var offset  = $(elem).offset(),
           newX    = event.clientX - offset.left,
           newY    = event.clientY - offset.top,
           size    = 0,
           opacity = 0.3,
           color   = $(elem).css('background-color');
      function btnClick(){
          size += 10;
          opacity -= 0.01;
          $(elem).css('background', color + ' radial-gradient( circle at ' + newX + 'px ' + newY + 'px, rgba(0,0,0,' + opacity + ') ' + size + '%, rgba(0,0,0,0) ' + (size + 2 ) + '% ) no-repeat');
          if( size <= 300 ){
              window.requestAnimationFrame( btnClick );
          }else{
              $(elem).css('background', '');
          }
      }
      window.requestAnimationFrame( btnClick );
  });
  
  // just an automated script to run a demo on load
  setTimeout( function(){
  buttonPress( 
      $('.buttonTabel'), 
      {clientX : (120 + $('.buttonTabel').offset().left ),
       clientY: (50 + $('.buttonTabel').offset().top ) } );
  }, 1000 );