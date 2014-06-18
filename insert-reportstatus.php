<?php

//Uses config file to connect database, config file holds varables like user and password
include('../../config.php');
include ('opendb.php');

//status choice
if(isset($_POST['status'])) {
if($_POST['status'] == 'outoforder') {
$choose='outoforder';
} elseif($_POST['status'] == 'inservice') {
$choose='inservice';
}
}

//variables to database and email
$instrument = $_POST[instrument];
$comment = $_POST[comment];
$signature = $_POST[signature];


//Inserts the data from the HiSeq logbook to the database storing the status information (table statustable).
$sql="INSERT INTO hiseq_statustable (instrument, comment, signature, status)
VALUES
('$instrument','$comment','$signature','$choose')";

//Redirect to another page after submitting the form - doesn't work
//if(mysql_query($sql))
//        header('Location: chooseinstrument.html');
//    else
//        echo "Error!";


//mail function
$to = 'emma.sernstad@scilifelab.se';
$subject = 'HiSeq report Clinical Genomics';
$message = "Instrument: $instrument\n" . "Status:  $choose\n" . "Comment: $comment\n" . "Reported by: $signature\n";

//mail function
mail($to, $subject, $message);



//tests the query and does not involving the insert to the db, prints out the input in the terminal
die($sql);


if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }

mysqli_close($con);



?>