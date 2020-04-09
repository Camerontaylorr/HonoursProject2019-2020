<!DOCTYPE html>
<html>

  
<head>
<Title> Fitts Law </Title>
<link rel = "stylesheet" href ="FittsCSS.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
</head>
<body>
<style>

</style>
<div id="myProgress">
  <div id="myBar"></div>
</div>
  <div class="wrapper">
    <div class="box 1" id ="0">1</div>
    <div class="box 2" id ="1">2</div>
    <div class="box 3" id ="2">3</div>
    <div class="box 4" id ="3">4</div>
    <div class="box 5" id ="4">5</div>
    <div class="box 6" id ="5">6</div>
    <div class="box 7" id ="6">7</div>
    <div class="box 8" id ="7">8</div>
    <div class="box 9" id ="8">9</div>
    <div class="box 10" id ="9">10</div>
    <div class="box 11" id ="10">11</div>
    <div class="box 12" id ="11">12</div>
    <div class="box 13" id ="12">13</div>
    <div class="box 14" id ="13">14</div>
    <div class="box 15" id ="14">15</div>
  </div>
 <!--
<!-- The Modal -->
<!-- Modal content -->
<!-- Trigger/Open The Modal -->


<!-- The Modal -->
<div id="myModal" class="modal" style = "cursor: pointer;" onClick="">

  <!-- Modal content -->
  
  <div class="modal-content" style = "cursor: pointer;" onClick="">
    <span class="close" onClick="">&times;</span>
    <p style ="text-align: center">Tap Anywhere to Begin</p>
  </div>
  
</div>

  <div id="Position" style="visibility:hidden; height: 0px;"></div>
  <div style = "cursor: pointer;" onClick="">
  <button id="myBtn" style="visibility:hidden; cursor: pointer;" onClick=""></button>
  </div>
  


  <script src="FittsJS.js"></script>
  
</body>


</html>
<script>

// Get the modal
$(window).on('load',function(){
         modal.style.display = "block";
    });
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// When the user clicks on <span> (x), close the modal
close.onclick = function() {
	   var el = document.documentElement,
    rfs = el.requestFullscreen
      || el.webkitRequestFullScreen
      || el.mozRequestFullScreen
      || el.msRequestFullscreen 
  ;

  rfs.call(el);
  modal.style.height = "0px";
}

// When the user clicks anywhere outside of the modal, close it
modal.onclick = function(event) {
		   var el = document.documentElement,
    rfs = el.requestFullscreen
      || el.webkitRequestFullScreen
      || el.mozRequestFullScreen
      || el.msRequestFullscreen ;
  rfs.call(el);
  
    modal.style.height = "0px";
  
}

</script>