  <?php

  $serverName = "Zeno.computing.dundee.ac.uk"; 
  $connectionInfo = array( "Database"=>"camerontaylordb", "UID"=>"camerontaylor", "PWD"=>"acb2019Cam231..");
  $conn = sqlsrv_connect( $serverName, $connectionInfo);
  
  if( $conn ) {
     //  echo "Connection established.<br />";
  }else{
       echo "Connection could not be established.<br />";
       die( print_r( sqlsrv_errors(), true));
  }
  

  ?>