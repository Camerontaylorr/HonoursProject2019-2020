<?php
session_start();

include 'db.php';
  
$_SESSION["DeviceID"]; 
$_SESSION["HandUsed"]; 
$_SESSION["phoneName"];
$_SESSION["screenWidth"]; 
$_SESSION["screenHeight"];

  
?>
<!DOCTYPE html>
<html lang = "en">
<meta name="viewport" content="width=device-width">
<meta name="Description" content="Fitts' Law Task.">

  
<head>
<Title> Fitts Law </Title>
<link rel = "stylesheet" href ="FittsCSS.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <div id="Position" style="visibility:hidden; height: 0px;"></div>
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
<div href="#" id="myModal" class="modal" style = "cursor: pointer;" onClick="">

  <!-- Modal content -->
  
  <div href="#" class="modal-content" style = "cursor: pointer;" onClick="">
    <span href="#" class="close" onClick="">&times;</span>
    <p style ="text-align: center">Tap Anywhere to Begin</p>
  </div>
  
</div>


  <div  href="#" style = "cursor: pointer;" onClick="">
  <button href="#" id="myBtn" style="visibility:hidden; cursor: pointer;" onClick=""></button>
  </div>
  
 </div>

  <script src="FittsJS.js"></script>
  
</body>


</html>
<script>

// Get the modal
var iOS = !!navigator.platform && /iPad|iPhone|iPod/.test(navigator.platform);

if (!iOS){
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

}
</script>