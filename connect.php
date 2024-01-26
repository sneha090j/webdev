<?php
error_reporting(0);
$servername="localhost";
$username="root";
$password="";
$dbname="elearn";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn){
    // echo "ok";
}
else{
    echo "failed";
}
?>