<?php
session_start();
include 'db.php';		

    if(isset($_POST['submit']))
{ 
	//$_SESSION["screenWidth"] = $screenWidth;
	//$_SESSION["screenHeight"] = $screenHeight;
	$check1 = $_POST['check1'];
    $check2 = $_POST['check2'];
    $check3 = $_POST['check3'];
    $check4 = $_POST['check4'];
    $check5 = $_POST['check5'];
    $check6 = $_POST['check6'];
    $participantName = $_POST['participantName'];
    $dateSigned = $_POST['dateSigned'];
	//$DeviceID = 1;
echo $check1;
echo $participantName;
echo $dateSigned;


$sql = "
INSERT INTO Participant_Information (Agree1, Agree2, Agree3, Agree4, Agree5, Agree6, particpantSignature, dateSigned)
  VALUES ('$check1','$check2', '$check3', '$check4', '$check5', '$check6', '$participantName','$dateSigned');";
  
 
  if (sqlsrv_query($conn, $sql)) {
    echo "New record has been added successfully !";
 } else {
    echo "Error: " . $sql . ":-" . sqlsrv_errors($conn);
 }
 sqlsrv_close($conn);
}
?>
<script type="text/javascript">location.href = 'startscreen.php';</script>
