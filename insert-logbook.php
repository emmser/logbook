<?php

//Uses config file to connect database
include('../../config.php');
include ('opendb.php');


$instrument = $_POST[instrument];
$method = $_POST[method];
$flowcellid = $_POST[flowcellid];
$comment = $_POST[comment];
$signature = $_POST[signature];

//Inserts the data from the HiSeq logbook to the database hiseq_logbook
$sql="INSERT INTO hiseq_logbook (instrument, log, flowcell, comment, signature)
VALUES
('$instrument','$method','$flowcellid','$comment','$signature')";


//tests the query and does not involving the insert to the db, prints out the input in the terminal
die($sql);


if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }

echo "1 record added";

mysqli_close($con);



?>