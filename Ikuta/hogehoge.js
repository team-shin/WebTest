function drag(className){
  $('.'+className).draggable();
}

function randomPosition(className,boxtop,boxleft){
  var x = Math.random() * 400;
  var y = Math.random() * 400;
  $("."+className)
    .css("top",y+"px")
    .css("left",x+"px");
}