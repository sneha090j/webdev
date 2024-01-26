<?php 
include("connect.php");
$id=$_GET['id'];
$query="DELETE FROM tutor WHERE id='$id' ";
$data=mysqli_query($conn,$query);
if($data){
    echo "<script>alert('Deleted!')</script>";
    echo "<script>window.open('course2.php','_self')</script>";
}
else{
    echo "<script>alert('Fail to Delete')</script>";
    echo "<script>window.open('course2.php','_self')</script>";
}
?>