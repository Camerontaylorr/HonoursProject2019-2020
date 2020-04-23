<?php
session_start();
include 'db.php';
include 'insert.php';

	$DeviceID = $_SESSION["DeviceID"] ;
	
	//echo $_POST['variable'];
	$Xpos = $_POST['Xpos'];
    $Ypos = $_POST['Ypos'];
	$StartID = $_POST['StartID'];
	$Random = $_POST['RandomID'];
	$Time = $_POST['timeTaken'];

	
 
     $sql = "INSERT INTO Device_Results(DeviceID, Xpos, Ypos, StartID, RandomID, timeTaken)
     VALUES ('$DeviceID', '$Xpos', '$Ypos', '$StartID', '$Random', '$Time')";
	
 
     if (sqlsrv_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . sqlsrv_errors($conn);
     }
     sqlsrv_close($conn);


//$phoneWidth 

?>

