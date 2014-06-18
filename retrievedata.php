<html>


<head>
<title>Retrieve data from database </title>
</head>
<body>

<?php
	//Uses config file to connect database, config file holds varables like user and password
	include('../../config.php');
	include ('opendb.php');

	$result = mysqli_query($con,"SELECT * FROM logbook");
	
	
while($row = mysqli_fetch_array($result)) {
  echo $row['instrument'] . " " . $row['log'];
  echo "<br>";
  
}
	
	// Close the database connection
	mysqli_close($con);
?>
	
</body>
</html>	