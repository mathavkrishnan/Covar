<?php      
    $host = "sql101.epizy.com";  
    $user = "epiz_30050205";  
    $password = '2As2Ut5u9M2';  
    $db_name = "epiz_30050205_covar";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>  