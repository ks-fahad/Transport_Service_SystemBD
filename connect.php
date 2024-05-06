<?php
$server = "localhost";
$user = "transportation_servicebd";
$con=mysqli_connect($server ,$user,"");
if(mysqli_connect_error()){
    echo "Connection Error!";
}
?>