<?php
include 'db.php';
  
	$Xpos = $_POST['Xpos'];
    $Ypos = $_POST['Ypos'];
	$StartID = $_POST['StartID'];
	$Random = $_POST['RandomID'];
	$Time = $_POST['timeTaken'];
	
 
     $sql = "INSERT INTO UserResults2(Xpos, Ypos, StartID, RandomID, TimeTaken)
     VALUES ('$Xpos', '$Ypos', '$StartID', '$Random', '$Time')";

    if(isset($_POST['submit']))
{ 
	$screenWidth = $_POST['screenWidth'];
	$screenHeight = $_POST['screenHeight'];
	$phoneType = $_POST['phoneName'];
	$HandUsed = $_POST['HandUsed'];


	echo 'hello';

 
   $sql = "INSERT INTO deviceInfo (screenWidth, phoneType, screenHeight, HandUsed)
     VALUES ('$screenWidth','$phoneType', '$screenHeight', '$HandUsed')";
		
     if (sqlsrv_query($conn, $sql)) {
       // echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . sqlsrv_errors($conn);
     }
     sqlsrv_close($conn);
}


//$phoneWidth 
//$phoneWidth 

?>

<script type="text/javascript">location.href = 'fittsHTML.php';</script>
