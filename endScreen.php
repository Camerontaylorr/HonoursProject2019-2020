<?php
session_start();
include 'db.php';
//$totalTime = $_POST['totalTime'];
$_SESSION["DeviceID"]; 
$_SESSION["HandUsed"]; 
$_SESSION["phoneName"];
$_SESSION["screenWidth"]; 
$_SESSION["screenHeight"];


?>

<html>

<head>
  <script>
    function totalTime() {
      var tt = sessionStorage.getItem("tt");
console.log(tt);
      document.getElementById("time").innerHTML = tt;
    }
  </script>
</head>
<!DOCTYPE html>
<html>
<head>
<link rel = "stylesheet" href ="FittsCSS.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>

 <div class="header">
  <h1>Fitts' Law</h1>
  <h2>and Mobile Devices</h2>
</div>
 

<section class="search-sec">
    <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 p-0">
                    </div>
                </div>
				
            </div>

			<br>
	<div class="container" style="background-color:white">

  <body onload="totalTime()">
<h1 style ="text-align:center">Well done - You have finshed the task!</h1>
  <h2 style ="text-align:center">Your time was : <span id="time"></span>s</h2>

	</div>






    <div class="container">
    <form method="post" action = "InsertRepeat.php">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 p-0">
                    </div>
                </div>
				
            </div>

      <br>
  <div class="container" style="background-color:white">
  <h4> If you wish to try again with a different hand please select from the drop down menu below</h4>
  <h5> Or you can exit the web application if you are finished</h5>
  <div class="col-md-12 col-sm-12 p-0">
              <br>
              <select class="form-control search-slt" name ="HandUsed" id="HandUsed" required >
              <option value="">Please Select what hand(s) you are using</option>
							<option value="Left">Left</option>
							<option value="Right">Right</option>
							<option value="Both Hands">Both Hands</option>
                            </select>
                            <br>
                            <div class="col-md-12 col-sm-12 p-0">
                        <button type="submit" id= "submit" name="submit" value="submit" class="btn btn-danger wrn-btn" onclick ="send()">Submit</button>
  </div>
	</div>


</section>

</html>

