<?php
session_start();

?>


<html>
    <head>
        <title>Teacher's Record</title>
        <style>
           
            body{
                background-image: linear-gradient(to bottom right,blue,aqua,blue);

            }
     
            .header{
    padding:1rem 5%;
    position: fixed;
    top:0; left: 0; right: 0;
    z-index: 1000;
    box-shadow: 0 .5rem 1.5rem rgba(0, 0, 0, .1);
    display: flex;
    align-items: left;
    justify-content: space-between;
    background-image:linear-gradient(blue,aqua);
}
.header .navbar a{
    font-size: 1.5rem;
    color: black;
    margin-left: 70rem;
    text-align:left;
}

.header .navbar a:hover{
    color: var(--green);
}
h2{
    margin:65px;
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

@media (max-width:768px){



.header .navbar{
    position: absolute;
    top:115%; right: 2rem;
    border-radius: .5rem;
    box-shadow: var(--box-shadow);
    width: 30rem;
    border: var(--border);
    background: #fff;
    transform: scale(0);
    opacity: 0;
    transform-origin: top right;
    transition: none;
}

.header .navbar.active{
    transform: scale(1);
    opacity: 1;
    transition: .2s ease-out;
}

.header .navbar a{
    font-size: 2rem;
    display: block;
    margin:2.5rem;
}

}
            </style>
<header class="header">
  <nav class="navbar">
        
     <a href="display.php">student's records</a>  

    

    </nav>
            </header>
    </head>        



<?php
include("connect.php");

error_reporting(0);
$query="SELECT * FROM tutor";
$data = mysqli_query($conn,$query);

$total = mysqli_num_rows($data);



if($total!=0){
    ?>
    <h2><center><mark>Displaying Teacher's Records</mark> <center></h2>
   <center> <table border="1px" cellspacing="7" width="70%">
        <tr>
            <th width="3%">id</th>
            <th width="10%">Name</th>
            <th width="10%">email</th>
            <th width="10%"> Number</th>
            <th width="10%"> dept</th>
            


        </tr>

 
    <?php
       while($result=mysqli_fetch_assoc($data)){
        echo "<tr>
                <td>".$result['id']."</td>
                <td>".$result['name']."</td>
                <td>".$result['email']."</td>
                <td>".$result['number']."</td>
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


<script>
    function checkdelete(){
    return confirm('Are you sure? You want to delete this record ?');
    }

</script>