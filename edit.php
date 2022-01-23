<?php
include 'connection.php';
$username = $_POST['email'];  
$password = $_POST['pass'];  
$username = stripcslashes($username);    
$username = mysqli_real_escape_string($con, $username);  
$password = mysqli_real_escape_string($con, $password);
$sql = "UPDATE log SET password = '$password' WHERE email = '$username'";
if ($con->query($sql) === TRUE) {
  header("location:page.html");
} else {
  echo "Error updating record: " . $con->error;
}

$con->close();
?>