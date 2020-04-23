<?php
session_start();
include 'db.php';		

    if(isset($_POST['submit']))
{ 
	//$_SESSION["screenWidth"] = $screenWidth;
	//$_SESSION["screenHeight"] = $screenHeight;
	$screenWidth = $_POST['screenWidth'];
	$screenHeight = $_POST['screenHeight'];
	$phoneType = $_POST['phoneName'];
    $HandUsed = $_POST['HandUsed'];
    
	//$DeviceID = 1;
$_SESSION["HandUsed"] = $HandUsed;
$_SESSION["phoneName"] = $phoneType;
$_SESSION["screenWidth"] = $screenWidth;
$_SESSION["screenHeight"] = $screenHeight;

	//echo 'hello';

 
   $sql = "        SET NOCOUNT ON
   INSERT INTO Device_Details (screenWidth, screenHeight, phoneType, HandUsed)
     VALUES ('$screenWidth','$screenHeight', '$phoneType', '$HandUsed');
	
	 SELECT SCOPE_IDENTITY() as DeviceID";
	 


	
   //  if (sqlsrv_query($conn, $sql)) {
		$results = sqlsrv_query($conn, $sql);
if ($results !== false) {
	
	//echo 'aa';
	
    if (sqlsrv_fetch($results) !== false) {
		

        $DeviceID = sqlsrv_get_field($results,0);
		$_SESSION["DeviceID"] = $DeviceID;
		echo $DeviceID;
    }else {
        if( ($errors = sqlsrv_errors() ) != null) 
		{
        foreach( $errors as $error ) 
		{
            echo "SQLSTATE: ".$error[ 'SQLSTATE']."<br />";
            echo "code: ".$error[ 'code']."<br />";
            echo "message: ".$error[ 'message']."<br />";
        }
    }
}
}

        echo "Redirecting to main page !";
     } else {
        echo "Error: " . $sql . ":-" . sqlsrv_errors($conn);
     }
	 
//     sqlsrv_close($conn);



//$phoneWidth 
//$phoneWidth 

?>
<script type="text/javascript">location.href = 'fittsHTML.php';</script>

