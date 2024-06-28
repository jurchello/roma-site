var right = document.getElementsByClassName("right");
var si = right.length;
var z = 1;
turnRight();
function turnRight() {
  if (si >= 1) {
    si--;
  } else {
    si = right.length - 1;
    function sttmot(i) {
      setTimeout(function () {
        right[i].style.zIndex = "auto";
      }, 300);
    }
    for (var i = 0; i < right.length; i++) {
      right[i].className = "right";
      sttmot(i);
      z = 1;
    }
  }
  right[si].classList.add("flip");
  z++;
  right[si].style.zIndex = z;
}
function turnLeft() {
  if (si < right.length) {
    si++;
  } else {
    si = 1;
    for (var i = right.length - 1; i > 0; i--) {
      right[i].classList.add("flip");
      right[i].style.zIndex = right.length + 1 - i;
    }
  }
  right[si - 1].className = "right";
  setTimeout(function () {
    right[si - 1].style.zIndex = "auto";
  }, 350);
}

$(document).ready(function(){
  // Activate Carousel
  $("#myCarousel").carousel();
    
  // Enable Carousel Indicators
  $(".item1").click(function(){
    $("#myCarousel").carousel(0);
  });
  $(".item2").click(function(){
    $("#myCarousel").carousel(1);
  });
  $(".item3").click(function(){
    $("#myCarousel").carousel(2);
  });
  $(".item4").click(function(){
    $("#myCarousel").carousel(3);
  });
  $(".item5").click(function(){
    $("#myCarousel").carousel(3);
  });
    
  // Enable Carousel Controls
  $(".left").click(function(){
    $("#myCarousel").carousel("prev");
  });
  $(".right").click(function(){
    $("#myCarousel").carousel("next");
  });
});

