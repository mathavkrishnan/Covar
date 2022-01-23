<?php
include 'connection.php';
$pnumber = $_POST['number'];
$date = $_POST['date'];
$time = $_POST['time'];
$vname = $_POST['vname'];
$vated = $_POST['vated'];
$sql = "INSERT INTO patients (`pnumber`, `date`, `time`, `vname`, `vated`)
VALUES ('$pnumber','$date','$time','$vname','$vated')";

if ($con->query($sql) === TRUE) {
    header("location:page.html");
} 
else {
  echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>