<?php
session_start();

?>


<html>
    <head>
        <title>Display Student's record</title>
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




$query="SELECT * FROM learn";
$data = mysqli_query($conn,$query);

$total = mysqli_num_rows($data);



if($total!=0){
    ?>
    <h2><center><mark>Student's Record</mark> <center></h2>
   <center> <table border="1px" cellspacing="7" width="80%">
        <tr>
            <th width="3%">id</th>
            <th width="10%">Name</th>
            <th width="10%">Email</th>
            <th width="10%"> Number</th>
            <th width="10%"> course</th>
            <th width="10%"> Operations</th>


        </tr>

 
    <?php
       while($result=mysqli_fetch_assoc($data)){
        echo "<tr>
                <td>".$result['id']."</td>
                <td>".$result['name']."</td>
                <td>".$result['email']."</td>
                <td>".$result['number']."</td>
                <td>".$result['course']."</td>
               
                <td><a href='update.php?id=$result[id]'><input type='submit' value='Update' class='update'></a>  <a href='delete.php?id=$result[id]'><input type='submit' value='Delete' class='delete' onclick='return checkdelete()'></a>
                
                </td>
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


<script>
    function checkdelete(){
    return confirm('Are you sure? You want to delete this record ?');
    }

</script>