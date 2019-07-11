try
{
    var div = document.getElementById("colorBackground");

function randomColor() {
    var Hex = '0123456789ABCDEF';
    var color = '#';
    for (var i = 0; i < 6; i++ ) {
        color += Hex[Math.floor(Math.random() * 16)];
    }
    return color;
}

function changeColor(){
  div.style.backgroundColor= randomColor();
}

let change = setInterval(changeColor,100);
setTimeout(function(){
    clearInterval(change);
    change = 0;
    window.location.href = '/anniversary';
 }, 30000);
}
catch
{

}