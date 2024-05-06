<?php
include 'connect.php';
else{
    $name=$_POST['O_name'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $dest1=$_POST['district1'];
    $dest2=$_POST['district2'];
    $counters=$_POST['counters'];
    $P_AC=$_POST['ac_price'];
    $P_Non=$_POST['non_price'];
    $about=$_POST['about'];
    $pas=$_POST['pas'];
    $cpas=$_POST['cpas'];
    if($pas==$cpas){
        $sql="INSERT INTO bus_operator VALUES(null,$name,$mobile,$email,$dest1,$dest2, $counters,$P_AC,$P_Non,$about,$pas)";
        mysqli_query($conn, $sql);
        print("Success");
    }
}

?>