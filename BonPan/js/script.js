menu.onclick = function myFunction(){
  var x = document.getElementById('myTopnav');

  if(x.ClassName ==="topnav") {
    x.ClassName() +=" responsive";
  } else {
    x.ClassName = "topnav";
  }
}

$(.'carousel').carousel({
  interval: 3000
})
