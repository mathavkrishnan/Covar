<?php
include 'connection.php';
$search = $_POST['search'];
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}

$sql = "SELECT pnumber,date,time,vname,vated FROM patients WHERE pnumber='$search'";
$result = $con->query($sql);
if ($result->num_rows > 0) {
 $row = $result->fetch_assoc();
 echo "<link rel='stylesheet' href='details.css' />";
 echo "<h1>Aadhar number: " . $row["pnumber"]. " - Date: " . $row["date"]. " - Time: " . $row["time"]. " - Vaccine: " . $row["vname"]. " - vaccinated: " . $row["vated"]."<br></h1>";
} 
else {
  echo "0 results";
}
$con->close();
?>