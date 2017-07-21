<div class="container-fluid">

<style>
.mySlides{display:none;}
.fl{float:left;}
.fr{float:right;}
.clr{clear:both;}
.slidesection{width:60%; margin-bottom:10px;}
.info{/*background:#CF3;*/ width:65%; height:400px; margin-bottom:10px; font-size:18px; color:#006; font-family:"Palatino Linotype", "Book Antiqua", Palatino, serif }
</style>

<h2 class="slider"></h2>

<div class="slidesection fl" style="max-width:50%">
  <img class="mySlides" src="images/slide1.png"  style="width:60%">
  <img class="mySlides" src="images/slide2.png"  style="width:60%">
  <img class="mySlides" src="images/slide3.png"  style="width:60%">
</div><br>

<div class="info fr" style="max-width:50%">
We intends to bridge the gap between juniors and seniors.
After the end of every semester , it's very common to go hither-tither 
in search of books for the upcoming semester.<br><br>
OBeX intends to change this situation.
<br><br>This platform can be used by seniors
to upload the books they intend to give and the student can browse through the available books 
and contact the person for the same.This is like your own Book exchange system! And We sincerely 
hope this seems useful to you.   

</div>

<div class = "clr"></div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 4000); // Change image every 4 seconds
}
</script>
</div>



	
	
	
	
	
	
<!---------footer----------->	
<?php
 include 'footer.php';
?>