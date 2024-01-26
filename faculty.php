
<?php
session_start();

?>


<html>
    <head>
        <title>Displaying Our Faculty</title>
        <style>
           
            body{
                background-image: linear-gradient(to bottom right,blue,aqua,blue);

            }
            table{
                padding:30px;
                margin-top:35px;
                background-color: white;
                border-radius:.5rem;
            }
             .update,.delete{
                background-color:aqua;
                color:white;
                border:0;
                position:space-between;
                border-radius:5px;
                font-size:20px; 
                width: 40%;
                cursor:pointer;
             }
             .delete{
                background-color:red;
             }
             h2{
    margin:65px;
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




$sql="select * from tutor ";
$total=mysqli_query($conn,$sql);




if($total!=0){
    ?>
    <h2><center><mark>Our Faculty</mark> <center></h2>
   <center> <table border="1px" cellspacing="7" width="30%">
        <tr>
        <th width="3%" >Id_No.</th>
        <th width="5%" >Name</th>
        <th width="5%" >Course</th>


        </tr>

 
    <?php
       while($result=mysqli_fetch_assoc($total)){
        echo "<tr>
                <td>".$result['id']."</td>
                <td>".$result['name']."</td>
               
                <td>".$result['dept']."</td>
               
              
                </tr>
                 ";
   
    }
}
else{
    echo "table has no record";
}

?>
   </table>   
</center>




