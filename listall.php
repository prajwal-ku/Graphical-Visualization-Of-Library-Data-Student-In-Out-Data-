<!DOCTYPE html>
<html>
<head>
<title> All Account holders</title>
<style>
th,td {text-align: right;
 padding: 8px;
 vertical-align: center;}

td:nth-child(1) {text-align: center;}

table,th,td {
   border: 1px solid black;
   border-collapse: collapse;}
</style>
</head>

<body>

<?php
$students = $_GET['Students'];
$criteria = $_GET['criteria'];
require_once 'login.php';


$sql2 = "Select * from Student_info order by $criteria DESC;";

$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
  // output data of each row
  $srno = 1;
  echo "<h2 align=center> Library users </h2>";
?>
<table align=center>
  
  <tr>
    <th>Sr. No.</th>
    <th>Name.</th>
    <th>Reg no</th>
    <th>Library Visits</th>
    <th>Time spent</th>
  </tr>
 
<?php
  
  while($row = $result2->fetch_assoc()) {
    
    echo "<tr>";
    echo "<td>" . $srno . "</td>";
    echo "<td>" . $row["Name"] . "</td>";
    echo "<td>" . $row["Reg_no"] . "</td>";
    echo "<td>" . $row["visits"] . "</td>";
    echo "<td>" . $row["Time_Spent"] . "</td>";
    echo "<tr>";
    if ($srno <= $students -1) 
    $srno = $srno + 1;
    else 
    break;
  }
  
}
?>
 </table>   
<?php

$conn->close();
?>
<a href="index.html"><p> Home</p> </a> 
</body>
</html>
