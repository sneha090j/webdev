<?php
session_start();

?>


<html>
    <head>
        <title>searched</title>
        <style>
           h2{
    margin:65px;
}
            body{
                background-image: linear-gradient(to bottom right,blue,aqua,blue);

            }
            table{
                padding:30px;
                margin-top:35px;
                background-color: white;
                border-radius:.5rem;
            }
             
            </style>
    </head>        



<?php
include("connect.php");

error_reporting(0);
// $email_pro=$_SESSION['email_ad'] ;
// if($email_pro == true){

// }
// else{
//     header('location:login.php');
// }
?>
<h2><center><mark>Displaying searched course with their corresponding teacher</mark> <center></h2>
<div class="container my-5">
  <center>   <table class="table"  border="3px" cellspacing="5" width="60%" margin="2px">
        <?php
if(isset($_POST['search_course_btn'])){
    $search= $_POST['search_course'];
    $sql="select * from tutor where dept= '$search'";
    $result=mysqli_query($conn,$sql);
    if($result){
       if(mysqli_num_rows($result)>0){
        echo '<thead color="black">
        <tr>
        <th width="5%" >Id_No.</th>
        <th width="5%" >Name</th>
        <th width="5%" >Course</th>
        </tr>
        </thead>
        ';
$row=mysqli_fetch_assoc($result);
echo '<tbody>
<tr>
<td>'.$row['id'].'</td>
<td>'.$row['name'].'</td>
<td>'.$row['dept'].'</td>
</tr>
</tbody>';

       }
else{
    echo "<script>alert('Subject Unavailable!')</script>";
   echo '<thead color="black">
        <tr>
        <th width="5%" >Id_No.</th>
        <th width="5%" >Name</th>
        <th width="5%" >Course</th>
        </tr>
        </thead>
        ';
    // echo "<script>window.open(login.php'_self')</script>";
}       
    }
}
?>
</table>
<center>
</div>


