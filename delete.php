<?php 
include("connect.php");
$id=$_GET['id'];
$query="DELETE FROM learn WHERE id='$id' ";
$data=mysqli_query($conn,$query);
if($data){
    echo "<script>alert('Deleted!')</script>";
    echo "<script>window.open('display.php','_self')</script>";
}
else{
    echo "<script>alert('Fail to Delete')</script>";
    echo "<script>window.open('display.php','_self')</script>";
}
?>