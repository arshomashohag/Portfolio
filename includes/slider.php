<?php 

  function slider(){
  
  echo '<div class="slider">';
  
    for($i=1; $i<=12; $i++){
	  echo '<img class="mySlides animated fadeIn" src="../images/'. $i .'.jpg">';
	 }

	  echo '<a class="btn btn-default" onclick="plusDivs(-1)">Prev</a>';
	  echo '<a class="btn btn-default" onclick="plusDivs(1)">Next</a>';

  echo '</div>';


 echo '<script>
   var slideIndex = 1;
   showDivs(slideIndex);

    function plusDivs(n) {

  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  x[slideIndex-1].style.display = "block";
}



$(document).keydown(function(e) {
    switch(e.which) {
        case 37:  plusDivs(-1);
        break;

        case 38:  plusDivs(1);
        break;

        case 39: plusDivs(1);
        break;

        case 40: plusDivs(-1);
        break;

        default: plusDivs(1);
    }
    e.preventDefault(); // prevent the default action (scroll / move caret)
});

</script>';
     
  }

 ?>