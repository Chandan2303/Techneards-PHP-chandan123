<?php
$s="localhost";
$ss="root";
$pass="";
$sss="raki";
$conn=mysqli_connect($s,$ss,$pass,$sss);
if($conn){
    echo"connection succseful";
}
    else{
        echo"somthing went";
    }
mysqli_query($conn,"insert into `employee` (empid,phone_no,name) values('1001','14758236','chandu')");
?>

	
