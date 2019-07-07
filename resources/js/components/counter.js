try
{
    var global_counter = 60;

$( window ).resize(function() {
  drawBackgroundSvg ()
});

$('.counter-button').click(function() 
{
  
  $('.counter-button').toggleClass('small');
  setTimeout(function(){
    $('.counter-button').toggleClass('hidden');
    $('.counter-bar').toggleClass('hidden');
    setTimeout(function(){
      $('.counter-bar').toggleClass('bar-resize');
      decreaseCounter(global_counter);
      setTimeout(function(){
        $('.counter-button').toggleClass('hidden small');
        $('.counter-bar').toggleClass('hidden bar-resize');
      }, global_counter * 1000);
      
    },33);
  },216);
 /* 
  
  */
});


function drawBackgroundSvg () {
  var width = $(document).width();
  var height = $(document).height();

  $('.triangles').css('width','100%');
  $('.triangles').css('height','100%');

  var pointsA = '0,0 '
      + width / 2+','+height /2 + ' ' 
  +  '0,' + height;

  var pointsB = width + ',0 '
      + width / 2+','+height /2 + ' ' 
      + width +  ',' + height;

  $('.triangle-a').attr('points',pointsA);
  $('.triangle-b').attr('points',pointsB);
}

function updateCounterText(value){
  $('.counter-text').text(value);
}

function decreaseCounter(counter){
  counter-=1;
  updateCounterText(counter+1);
  if(counter>-1){
    setTimeout(function(){
     decreaseCounter(counter);
    },1000);  
  } else {
    updateCounterText('--');
    setTimeout(function(){
      updateCounterText(global_counter);
    }, 1300);
  }
}

(function init() {
  drawBackgroundSvg();
  updateCounterText(global_counter);
  $('.counter-bar').css('transition','height '+global_counter+'s linear');
})();
}
catch
{

}