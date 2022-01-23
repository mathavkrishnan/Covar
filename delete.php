<?php
include 'connection.php';
$pnumber = $_POST['number'];
$sql = "DELETE FROM patients WHERE pnumber = '$pnumber'";
if ($con->query($sql) === TRUE) {
  header("location:page.html");
} 
else {
  echo "Error deleting record: " . $con->error;
}

$con->close();
?>