<?php
  
// Username is root
$user = 'epiz_28890778';
$password = 'DtQrJ4X8Tc6EnD'; 
  
// Database name 
$database = 'epiz_28890778_customer_details'; 
  
// Server is localhost with

$servername='sql200.epizy.com';
$link = mysqli_connect($servername, $user, 
                $password, $database);
  
// Checking for connections
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Print host information
//echo "Connect Successfully. Host info: " . mysqli_get_host_info($link);
?>
