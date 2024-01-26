<?php 
include("connect.php");
?>


<style>

*{
    margin: 0px;
    padding: 0px;
}
html,body{
    width: 100%;
    height: 100%;
}
body{
    background-image: linear-gradient(to top left,blue,aqua,aqua);
    width: 100%;
 
    background-position: center;
    background-size: cover;
    height: 100vh;
}
#bd{
    margin: 30px,30px,30px,30px;
    padding: 25px;
    color: black;
    font: 1em sans-serif;
}
#im{
    text-align: center;
    font-size: large;

    width:40%;
    float: left;
    margin: 50px;
    margin-top: 100px;
    
    height: 500px;
}
#ln{
    
    text-decoration: none;
 
   color: blueviolet;
   float: right;
   text-overflow: clip;
   transform: inherit;
   left: 20px;
    margin: 50px;
   
    margin-left: 0px;
    padding-inline-start: 30px;
    padding-inline-end: 30px;
    padding-inline: 30px;
    text-align: center;
    margin-top: 100px;
    width: 40%;
    
    height: 500px;
    
}
#sp{
    text-align: center;
    color:blueviolet;
}
.bt{
    width: 240px;
    height: 40px;
    background: blueviolet;
    border: none;
    margin-top: 30px;
    font-size: 18px;
    border-radius: 60px;
    cursor: pointer;
    color: #fff;
    transition: 0.4s ease;
}

.bt:hover{
    background: #fff;
    color: blueviolet;
}
.bt a{
    text-decoration: none;
    color: rgb(34, 27, 28);
    font-weight: bold;
}
#ln .tt{
  
    border-radius: 3%;
    box-sizing: content-box;
    border-color: white;
    float: left;
    text-align: center;

}

#ck{
    float: right;
    
} 

.form-container{
    width: 250px;
    height: 380px;
    background: linear-gradient(to top, rgba(0,0,0,0.8)50%,rgba(0,0,0,0.8)50%);
    position: absolute;
    top: 200px;
    left: 870px;
    transform: translate(0%,-5%);
    border-radius: 10px;
    padding: 25px;
}
.form-container .pan{
    font: 1em sans-serif;
}
.form-container h3 {
    color:white;
}
.form-container h2{
    width: 220px;
    font-family: sans-serif;
    text-align: center;
    color: pink;
    font-size: 22px;
    background-color: #fff;
    border-radius: 10px;
    margin: 2px;
    padding: 8px;
}
.form-container label {
    color:white;
}
.form-container input, .custom_select{
    width: 240px;
    height: 25px;
    background: transparent;
    border-bottom: 1px solid pink;
    border-top: none;
    border-right: none;
    border-left: none;
    color: #fff;
    font-size: 15px;
    letter-spacing: 1px;
    margin-top: 30px;
    font-family: sans-serif;
}


.form-container .custom_select{
    width: 240px;
    height: 25px;
    background: transparent;
    border-bottom: 1px solid pink;
    border-top: none;
    border-right: none;
    border-left: none;
    color: #fff;
    font-size: 15px;
    letter-spacing: 1px;
    margin-top: 30px;
    font-family: sans-serif;
}

.form-container input:focus{
    outline: none;
}

::placeholder{
    color: #fff;
    font-family: Arial;
}

.btnn{
    width: 240px;
    height: 40px;
    background: pink;
    border: none;
    margin-top: 30px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    color: #fff;
    transition: 0.4s ease;
}
.btnn:hover{
    background: #fff;
    color: rgb(237, 74, 101);
}
.btnn a{
    text-decoration: none;
    color: #000;
    font-weight: bold;
}
.form-container .link{
    color:white;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 17px;
    padding-top: 20px;
    text-align: center;
}
.form-container .link a{
    text-decoration: none;
    color: pink;
} 
    .cn{
        width: 160px;
        height: 40px;
        background: pink;
        border: none;
        margin-bottom: 10px;
        margin-left: 20px;
        font-size: 18px;
        border-radius: 10px;
        cursor: pointer;
        transition: .4s ease;
        
    }
    
   .cn a{
        text-decoration: none;
        color: #000;
        transition: .3s ease;
    }
    </style>
    <h1><b><i><u> <center>Hello World!</center> </u></i></b></h1>
    <div id="bd">
        <div id="im">
   
         <h1>DataBase Management</h1>
         <br>
            <br>
            <p>Welcome  to  hello  world ! .Enroll  to  learn  web  development , DSA , Database , Computer Network , etc.
            <br>
            <br>
            <br>
            Database management refers to the actions a business takes to manipulate and control data to meet necessary conditions throughout the entire data lifecycle. 
            <br>
            <br>
            <br>
           Once you join Online courses , it will be enable lifelong learning . We allow individuals to continue their education at any stage of life , facilitating personal growth and development.
           <br>
           <br>
           <br>
           Engaging multimedia elements , forums , quizzes , and assignments create an interactive learning experience.
         </p>

        </div>
       
           
        
                
    <section class="form-container">

      <form action="" method="POST" enctype="multipart/form-data" class="login">
      <h3><center>ENROLL NOW </center></h3>
   <input type="text" name="name" placeholder="enter your name" maxlength="20" required class="box">
   <input type="email" name="email" placeholder="enter your email" maxlength="20" required class="box">
  <div class "input_field" >
    <br>
   <label>course:</label>
   <br>
  
   <div class"custom_select">
    <select name="course">
        <option>select</option>
        <option>DataBase</option>

   </div>
   <input type="tel" name="number" placeholder="enter your mobile number" required class="box">
   <input type="password" name="password" placeholder="enter your password" maxlength="10" required class="box">
<br>

   <input type="submit" name="submit" class="btnn">
    </form>

</section>
  </div>
            
    
</body>
</html>


<?php
require 'C:\xampp\htdocs\learnpp\minpro\mp\phpmailer\include\PHPMailer.php';
require 'C:\xampp\htdocs\learnpp\minpro\mp\phpmailer\include\SMTP.php';
require 'C:\xampp\htdocs\learnpp\minpro\mp\phpmailer\include\Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $course = $_POST['course'];
    $number = $_POST['number'];
    $password = $_POST['password'];


    $query = "INSERT INTO enroll2 VALUES('id','$name','$email','$number','$password','$course')";
    $data = mysqli_query($conn,$query);

    // Email Sending Logic
    $mail = new PHPMailer();

    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "tls";
    $mail->Port = 587;
    $mail->Username = "sneha090j@gmail.com";
    $mail->Password = "avth gwpt voxd llyk";
    $mail->Subject = "Enrollment: ".$course; // Subject for enrollment
    $mail->setFrom("sneha090j@gmail.com");
    $mail->Body = "Welcome to Hello World ".$name."\nEmail: ".$email."\nPhone: ".$number."\n Thank you for enrolling in course: ".$course  ; // Body of the email
    $mail->addAddress($email);

    if ($mail->Send()) {
       echo "<script>alert('Enrolled successfully!Confirmed mail has been sent to your register email.')</script>";
        echo "<script>window.open('he.php','_self')</script>";
        // Here, you can add further actions upon successful enrollment and email sending.
        // For example, save the enrollment details to a database.
    } else {
        echo "<script>alert('error , please try again later..!')script>";
           echo "<script>window.open('course.php','_self')</script>";
    }
    $mail->smtpClose();
}
?>
<!-- Your HTML form remains unchanged -->

<!-- The rest of your HTML code -->

 
