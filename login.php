<?php 
// use your login details
$servername = "localhost";
$db_name = "library_data";  //e.g. D16AMS90_exam
$username = "root"; //e.g. D16AMS90
$password = "Praj@2004"; //e.g. NGR5YT6Y

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql1 = "USE ". $db_name . ";";
if ($conn->query($sql1) === TRUE) {
  #echo " ";
} else {
  echo "Error: " . $sql1 . "<br>" . $conn->error;
}


?>
