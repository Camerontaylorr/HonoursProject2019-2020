  <?php

  $serverName = "Zeno.computing.dundee.ac.uk"; 
  $connectionInfo = array( "Database"=>"camerontaylordb", "UID"=>"camerontaylor", "PWD"=>"acb2019Cam231..");
  $conn = sqlsrv_connect( $serverName, $connectionInfo);
  
  if( $conn ) {
  //     echo "Connection established.<br />";
  }else{
       echo "Connection could not be established.<br />";
       die( print_r( sqlsrv_errors(), true));
  }
 /* 
 $sql = "INSERT INTO UserInformation (PersonId)";
   if (sqlsrv_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . sqlsrv_errors($conn);
     }
     sqlsrv_close($conn);
*/
  ?>
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
        <form method="post" action = "insert.php">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 p-0">
                            <input type="text" class="form-control search-slt" name ="phoneName" id ="phoneName" required placeholder="Please Enter the Device you are using" >
                        </div>
						        <div class="col-md-6 col-sm-12 p-0">
                            <select class="form-control search-slt" name ="HandUsed" id="HandUsed" required >
                            <option value="">Please Select what hand(s) you are using</option>
							<option value="Left">Left</option>
							<option value="Right">Right</option>
							<option value="Both Hands">Both Hands</option>
                            </select>
                        </div>
						<input type = "hidden" name ="screenWidth" id ="screenWidth" readonly/>
						<input type = "hidden" name ="screenHeight" id ="screenHeight" readonly/>
               
        

                        <div class="col-md-12 col-sm-12 p-0">
                            <button type="submit" id= "submit" name="submit" value="submit" class="btn btn-danger wrn-btn">Submit</button>
                        </div>
					
                    </div>
                </div>
				
            </div>
        </form>
			<br>
	<div class="container" style="background-color:white">
  <h2>Step 1</h2>
  <p>Enter what device you are currently using (e.g. Samsung Galaxy s10) in to the bar above and click submit.</p>
	</div>
	<br>
	<div class="container" style="background-color:white">
  <h2>Step 2</h2>
  <p>Once you have clicked submit you will be taken to the task. Here you will be expected to tap various parts of the screen as accurately and quickly as possible.</p>
	</div>


</section>



  <!--
<div style = "  display: table; margin: 0 auto;">
<h2 >Select Device</h2>

<p>Please type the device you are using:</p>

<form method="post" action = "insert.php">
  <input type = "text" name ="phoneName" id ="phoneName"/>
  <input type = "hidden" name ="screenWidth" id ="screenWidth" readonly/>
    <input type = "hidden" name ="screenHeight" id ="screenHeight" readonly/>
 
  <input type="submit" id= "submit" name="submit" value="submit"/>
</form>
</div>

-->

<script type="text/javascript">
var screenWidth = screen.width; 
var screenHeight = screen.height;
//var deviceType = $("#phoneName").val();
document.getElementById('screenWidth').value = screenWidth;
document.getElementById('screenHeight').value = screenHeight;

</script>
</form>
</body>
</html>





</body>
</html>