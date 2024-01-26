
<?php

session_start();

?>
<style>
    *{
    margin: 0;
    padding: 0;
}

.main{
    width: 100%;
    background: linear-gradient(to bottom right,blue,aqua,blue), url(1.jpg);
    background-position: center;
    background-size: cover;
    height: 100vh;
}

.navbar{
    width: 1200px;
    height: 75px;
    margin: auto;
}

.icon{
    width: 200px;
    float: left;
    height: 70px;
}

.logo{
    color: pink;
    font-size: 35px;
    font-family: Arial;
    padding-left: 20px;
    float: left;
    padding-top: 10px;
    margin-top: 5px
}

.menu{
    width: 400px;
    float: left;
    height: 70px;
}

ul{
    float: left;
    display: flex;
    justify-content: center;
    align-items: center;
}

ul li{
    list-style: none;
    margin-left: 62px;
    margin-top: 27px;
    font-size: 14px;
}

ul li a{
    text-decoration: none;
    color: #fff;
    font-family: Arial;
    font-weight: bold;
    transition: 0.4s ease-in-out;
}

ul li a:hover{
    color: pink;
}

.search{
    width: 330px;
    float: left;
    margin-left: 270px;
}

.srch{
    font-family: 'Times New Roman';
    width: 200px;
    height: 40px;
    background: transparent;
    border: 1px red;
    margin-top: 13px;
    color: #fff;
    border-right: none;
    font-size: 16px;
    float: left;
    padding: 10px;
    border-bottom-left-radius: 5px;
    border-top-left-radius: 5px;
}

.btn{
    width: 100px;
    height: 40px;
    background: pink;
    border: 2px solid pink;
    margin-top: 14px;
    color: #fff;
    font-size: 15px;
    border-bottom-right-radius: 5px;
    border-bottom-right-radius: 5px;
    transition: 0.2s ease;
    cursor: pointer;
}
.btn:hover{
    color: #000;
}

.btn:focus{
    outline: none;
}

.srch:focus{
    outline: none;
}

.content{
    width: 1200px;
    height: auto;
    margin: auto;
    color: white;

    position: relative;
}

.content .par{
    padding-left: 20px;
    padding-bottom: 25px;
    font-family: Arial;
    letter-spacing: 1.2px;
    line-height: 30px;
}

.content h1{
    font-family: 'Times New Roman';
    font-size: 50px;
    padding-left: 20px;
    margin-top: 9%;
    letter-spacing: 2px;
}

.content .cn{
    width: 160px;
    height: 40px;
    background: black;
    border: none;
    margin-bottom: 10px;
    margin-left: 20px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    transition: .3s ease;
    
}

.content .cn a{
    text-decoration: none;
    color: #000;
    transition: .3s ease;
}

.cn:hover{
    background-color: #fff;
}

.content span{
    color:black;
    font-size: 65px
}

.form-container{
    width: 250px;
    height: 380px;
    background: linear-gradient(to top, rgba(0,0,0,0.8)50%,rgba(0,0,0,0.8)50%);
    position: absolute;
    top: -20px;
    left: 870px;
    transform: translate(0%,-5%);
    border-radius: 10px;
    padding: 25px;
}
.form-container .pan{
    font: 1em sans-serif;
}
.form-container h2{
    width: 220px;
    font-family: sans-serif;
    text-align: center;
    color: white;
    font-size: 22px;
    background-color: #fff;
    border-radius: 10px;
    margin: 2px;
    padding: 8px;
}

.form-container input{
    width: 240px;
    height: 35px;
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
    font-family: Arial, Helvetica, sans-serif;
    font-size: 17px;
    padding-top: 20px;
    text-align: center;
}
.form-container .link a{
    text-decoration: none;
    color: pink;
}
.liw{
    padding-top: 15px;
    padding-bottom: 10px;
    text-align: center;
}
.icons a{
    text-decoration: none;
    color: #fff;
}
.icons ion-icon{
    color: #fff;
    font-size: 30px;
    padding-left: 14px;
    padding-top: 5px;
    transition: 0.3s ease;
}
.icons ion-icon:hover{
    color: pink;
}

@media(max-width: 991px){
    .main{
        width:88%;
    }

}




    </style>

    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">Hello World!</h2>
            </div>


        </div> 
        <div class="content">
            <h1>Web Design & <br><span>Development</span> <br>Course</h1>
            <p class="par">Welcome to hello world !. LogIn to learn web development,DSA,Database,Computer Network,etc.
                <br>
                
                We will provide opportunities to acquire new skills or update existing ones , which can enhance
                <br> your resume or contribute to career advancement . 
                <br>
               
               Once you join Online courses , it will be enable lifelong learning . We allow individuals to continue 
               <br>
               their education at any stage of life , facilitating personal growth and development.
               <br>
              
               Engaging multimedia elements , forums , quizzes , and assignments create an interactive learning
               <br>
                experience.</p>


                <section class="form-container">

                    <form action="#" method="POST" class="login">
                       <h3><center>Login Here</center></h3>
                        <br>
                        <br>
                       <h4>Email:<h4>
                       <input type="email" name="email" placeholder="enter your email" maxlength="20" required class="box">
                       <br>
                       <br>
                       <h4>Password:<h4>
                       <input type="password" name="password" placeholder="enter your password" maxlength="10" required class="box">
                       <br>
                       <input type="submit" name="login" value="login here" class="btnn">
                    </form>
                 
                 </section>
                    </div>
                </div>
        </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
<!-- </body>
</html> -->


<?php
    include("connect.php");


    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $query= "SELECT * FROM TUTOR WHERE email = '$email' && password = '$password'";

         $data= mysqli_query($conn, $query);

        $total= mysqli_num_rows($data);
    // echo $total;
        if($total == 1){
          
        echo "<script>alert('Log In successfully!')</script>";
        echo "<script>window.open('course2.php','_self')</script>";

        }
        else{
            echo "<script>alert('Log In failed!')</script>";
        }
}

?>
