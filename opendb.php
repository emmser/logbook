<?php


//Connects the database using parameters from a configfile 
$con=mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// Check the connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
    
?>
  
  