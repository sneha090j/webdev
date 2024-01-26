<?php
include("connect.php");
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-learning</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap');
:root {
    --green: white;
    --black: rgb(19, 17, 17);
    --light-color: rgb(238, 227, 227);
    --box-shadow: .5rem .5rem rgba(22, 160, 133, .2);
    --box-shadow: .4rem .4rem rgba(243, 239, 239, 0.2);
    --border: .2rem solid paleyellow;
}

*{
    font-family: 'Poppins', sans-serif;
    margin:0; padding: 0;
    box-sizing: border-box;
    outline: none; border: none;
    text-transform: capitalize;
    transition: all .2s ease-out;
    text-decoration: none;
}

html{
    font-size: 62.5%;
    overflow-x: hidden;
    scroll-padding-top: 7rem;
    scroll-behavior: smooth;
    background-image: linear-gradient(to bottom right,aqua,blue,aqua,aqua,blue);
}

section{
    padding:2rem 9%;
}

section:nth-child(even){
   /* background-image: linear-gradient(blue,blueviolet); */
}

.heading{
    text-align: center;
    padding-bottom: 2rem;
    text-shadow: var(--text-shadow);
    text-transform: uppercase;
    color:var(--black);
    font-size: 5rem;
    letter-spacing: .4rem;
}

.heading span{
    text-transform: uppercase;
    color:var(--green);
}

.btn{
    display: inline-block;
    margin-top: 1rem;
    padding: .5rem;
    padding-left: 1rem;
    border:var(--border);
    border-radius: .5rem;
    box-shadow: var(--box-shadow);
    color:black;
    cursor: pointer;
    font-size: 1.7rem;
    background-image:linear-gradient(blue,aqua,aqua);
}

.btn span{
    padding:.7rem 1rem;
    border-radius: .5rem;
    background: var(--green);
    color:blue;
    margin-left: .5rem;
}

.btn:hover{
    background: var(--green);
    color:black;
}

.btn:hover span{
    color: black;
    background:blue;
    margin-left: 1rem;
}

.header{
    padding:2rem 9%;
    position: fixed;
    top:0; left: 0; right: 0;
    z-index: 1000;
    box-shadow: 0 .5rem 1.5rem rgba(0, 0, 0, .1);
    display: flex;
    align-items: center;
    justify-content: space-between;
    background-image:linear-gradient(blue,aqua);
}

.header .logo{
    font-size: 2.5rem;
    color:black;
}

.header .logo i{
    color:blue;
}

.header .navbar a{
    font-size: 1.7rem;
    color: black;
    margin-left: 2rem;
}

.header .navbar a:hover{
    color: var(--green);
}

#menu-btn{
    font-size: 2.5rem;
    border-radius: .5rem;
    background: #030000;
    color:var(--green);
    padding: 1rem 1.5rem;
    cursor: pointer;
    display: none;
}

.home{
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    gap:1.5rem;
    padding-top: 10rem;
}

.home .image{
    flex:1 1 45rem;
}

.home .image img{
    width: 100%;
}

.home .content{
    flex:1 1 45rem;
}

.home .content h3{
    font-size: 4.5rem;
    color:var(--black);
    line-height: 1.8;
    text-shadow: var(--text-shadow);
}

.home .content p{
    font-size: 1.7rem;
    color: white;
    line-height: 1.8;
    padding: 1rem 0;
}



.header .search-form{
   width: 30rem;
   border-radius: .5rem;
   display: flex;
   align-items: center;
   gap:1.5rem;
   padding: 1.5rem 2rem;
   background-color: white;
}

.header .search-form input{
   width: 100%;
   background:none;
   font-size: 2rem;
   color: var(--black);
}

.header .search-form button{
   font-size: 2rem;
   color: var(--black);
   cursor: pointer;
   background: none;
}

.header ..search-form button:hover{
   color: blue;
}






.icons-container{
    display: grid;
    gap:2rem;
    grid-template-columns: repeat(auto-fit, minmax(20rem, 1fr));
    padding-top: 5rem;
    padding-bottom: 5rem;
}

.icons-container .icons{
    border:var(--border);
    box-shadow: var(--box-shadow);
    border-radius: .5rem;
    text-align: center;
    padding: 2.5rem;
}

.icons-container .icons i{
    font-size: 4.5rem;
    color: white;
    padding-bottom: .7rem;
}

.icons-container .icons h3{
    font-size: 4.5rem;
    color:var(--black);
    padding: .5rem 0;
    text-shadow: var(--text-shadow);
}

.icons-container .icons p{
    font-size: 1.7rem;
    color: white;
}



.about .row{
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    gap:2rem;
}

.about .row .image{
    flex:1 1 45rem;
}

.about .row .image img{
    width: 100%;
}

.about .row .content{
    flex:1 1 45rem;
}

.about .row .content h3{
    color: var(--black);
    text-shadow: var(--text-shadow);
    font-size: 4rem;
    line-height: 1.8;
}

.about .row .content p{
    color: darkblue;
    padding:1rem 0;
    font-size: 1.5rem;
    line-height: 1.8;
}

.faculty .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
    gap:2rem;
}

.faculty .box-container .box{
    text-align: center;
    background-image: linear-gradient(to bottom right,blue,aqua,blue);
    border-radius: .5rem;
    border:var(--border);
    box-shadow: var(--box-shadow);
    padding:2rem;
}

.faculty .box-container .box img{
    height: 20rem;
    border:var(--border);
    border-radius: .5rem;
    margin-top: 1rem;
    margin-bottom: 1rem;
}

.faculty .box-container .box h3{
    color:black;
    font-size: 2.5rem;
}

.faculty .box-container .box span{
    color: black;
    font-size: 1.5rem;
}

.faculty .box-container .box .share{
    padding-top: 2rem;
}

.faculty .box-container .box .share a{
    height: 5rem;
    width: 5rem;
    line-height: 4.5rem;
    font-size: 2rem;
    color:blue;
    border-radius: .5rem;
    border:var(--border);
    margin:.3rem;
}

.faculty .box-container .box .share a:hover{
    background:var(--green);
    /* color:#fff; */
    box-shadow: var(--box-shadow);
}



.review .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(27rem, 1fr));
    gap:2rem;
}

.review .box-container .box{
    border:var(--border);
    box-shadow: var(--box-shadow);
    border-radius: .5rem;
    padding:2.5rem;
    background: #fff;
    text-align: center;
    position: relative;
    overflow: hidden;
    z-index: 0;
}

.review .box-container .box img{
    height: 10rem;
    width: 10rem;
    border-radius: 50%;
    object-fit: cover;
    border:.5rem solid #3c012cc0;
}

.review .box-container .box h3{
    color:#fff;
    font-size: 2.2rem;
    padding:.5rem 0;
}

.review .box-container .box .stars i{
    color:#fff;
    font-size: 1.5rem;
}

.review .box-container .box .text{
    color:var(--light-color);
    line-height: 1.8;
    font-size: 1.6rem;
    padding-top: 4rem;
}

.review .box-container .box::before{
    content: '';
    position: absolute;
    top:-4rem; left: 50%;
    transform:translateX(-50%);
    background:var(--green);
    border-bottom-left-radius: 50%;
    border-bottom-right-radius: 50%;
    height: 25rem;
    width: 120%;
    z-index: -1;
}

.students .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
    gap:2rem;
}

.students .box-container .box{
    border:var(--border);
    box-shadow: var(--box-shadow);
    border-radius: .5rem;
    padding: 2rem;
}

.students .box-container .box .image{
    height: 20rem;
    overflow:hidden;
    border-radius: .5rem;
}

.students .box-container .box .image img{
    height: 100%;
    width: 100%;
    object-fit: cover;
}

.students .box-container .box:hover .image img{
    transform:scale(1.2);
}

.students .box-container .box .content{
    padding-top: 1rem;
}

.students .box-container .box .content .icon{
    padding: 1rem 0;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.students .box-container .box .content .icon a{
    font-size: 1.4rem;
    color: black;
}

.students .box-container .box .content .icon a:hover{
    color:darkblue;
}

.students .box-container .box .content .icon a i{
    padding-right: .5rem;
    color:  black;
}

.students .box-container .box .content h3{
    color:black;
    font-size: 3rem;
}

.students .box-container .box .content p{
    color:black;
    font-size: 1.5rem;
    line-height: 1.8;
    padding:1rem 0;
}

.footer .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(22rem, 1fr));
    gap:2rem;
}

.footer .box-container .box h3{
    font-size: 2.5rem;
    color:var(--black);
    padding: 1rem 0;
}

.footer .box-container .box a{
    display: block;
    font-size: 1.5rem;
    color:blue;
    padding: 1rem 0;
}

.footer .box-container .box a i{
    padding-right: .5rem;
    color:darkblue;
}

.footer .box-container .box a:hover i{
    padding-right:2rem;
}

.footer .credit{
    padding: 1rem;
    padding-top: 2rem;
    margin-top: 2rem;
    text-align: center;
    font-size: 2rem;
    color:var(--light-color);
    border-top: .1rem solid rgba(0, 0, 0, .1);
}

.footer .credit span{
    color:darkblue;
}









/* media queries  */
@media (max-width:991px){

    html{
        font-size: 55%;
    }

    .header{
        padding: 2rem;
    }

    section{
        padding:2rem;
    }

}

@media (max-width:768px){

    #menu-btn{
        display: initial;
    }

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

@media (max-width:450px){

    html{
        font-size: 50%;
    }

}




@media (max-width:768px){

#search-btn{
   display: inline-block;
}

.header .flex .search-form{
   position: absolute;
   top:99%; left: 0; right: 0;
   width: auto;
   border-top: var(--border);     
   border-bottom: var(--border);
   background-color: var(--white);
   clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
   transition: .2s linear;
}

.header .flex .search-form.active{
   clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
}

.form-container .flex{
   display: flex;
   gap: 0;
   flex-flow: column;
}

.watch-video .video-details .video{
   height: 30rem;
}

}


</style>


   

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"> <i class="fas fa-globe"></i>Hello World ! </a>

    <form action="search.php" method="post" class="search-form">
         <input type="text" name="search_course" placeholder="search courses..." required maxlength="100">
         <button type="submit" class="fas fa-search" name="search_course_btn"></button>
      </form>

<script>
let searchForm = document.querySelector('.header .flex .search-form');

document.querySelector('#search-btn').onclick = () =>{
   searchForm.classList.toggle('active');
   profile.classList.remove('active');
}


</script>
    <nav class="navbar">
        
    <a href="#home">Home</a>
       
       <a href="#about">About</a>
       <a href="faculty.php">Faculty</a>
       
       <!-- <a href="#review">review</a> -->
      
       <a href="coursed.php">Our Courses</a>

        <?php

        $sel="SELECT * FROM learn";
        $query=mysqli_query($conn,$sel);
        $result=mysqli_fetch_assoc($query);
        ?>
        <a href="#"><i class="fas fa-user"></i>
        <br>
        <?php echo $_SESSION['name']?>
     </a>
      

    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="image">
        <img src="https://media.istockphoto.com/id/1341547247/photo/clipboard-with-green-check-marks-isolated-on-white-background.webp?b=1&s=170667a&w=0&k=20&c=GvQE78ILZfmzB8mIsmELBvdxxLr7uYBnyYh-7o-rr-8=" alt="">
    </div>

    <div class="content">
        <h3>Stay connected ,Stay Updated</h3>
        <p>You can access materials at your own pace and time, fitting education around other commitments.
            <br>
            <br>
We allows access to educational resources from anywhere with an internet connection, breaking down geographical barriers.</p>
        <a href="coursed.php" class="btn"> our courses <span class="fas fa-chevron-right"></span> </a>
    </div>

</section>

<!-- home section ends -->

<!-- icons section starts  -->


<section class="icons-container">

    <div class="icons">
        <i class="fas fa-code"></i>
        <h3>C++</h3>
        <p>Beginner to Advance</p>
    </div>

    <div class="icons">
        <i class="fab fa-java"></i>
        <h3>Java</h3>
        <p>Beginner to Advance</p>
    </div>

   

    <div class="icons">
        <i class="fab fa-html5"></i>
        <h3>Mern Stack</h3>
        <p>Including database Mongodb</p>
    </div>

</section> 


<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span>about</span> us </h1>

    <div class="row">

        <div class="image">
            <img src="https://media.istockphoto.com/id/1198252567/photo/indian-woman-teacher-wear-wireless-headset-video-calling-on-laptop.webp?b=1&s=170667a&w=0&k=20&c=arvzTkkEF4NY-YoACtCCMVKNdFHigRKa87vb3izrzzo=" alt="">
        </div>

        <div class="content">
            <h3>Secure your future with developing skills</h3>
            <p>Welcome  to  hello  world ! . LogIn  to  learn  web  development , DSA , Database , Computer Network , etc.
                <br>
                
                We will provide opportunities to acquire new skills or update existing ones , which can enhance your resume or contribute to career advancement . 
                <br>
               
               Once you join Online courses , it will be enable lifelong learning . We allow individuals to continue their education at any stage of life , facilitating personal growth and development.
               <br>
              
               Engaging multimedia elements , forums , quizzes , and assignments create an interactive learning experience.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- faculty section starts  -->

<section class="faculty" id="faculty">

    <h1 class="heading"> our <span>Faculty</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="https://images.unsplash.com/photo-1574281570877-bd815ebb50a4?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjMxfHxpaXQlMjB0ZWFjaGVyfGVufDB8fDB8fHww" alt="">
            <h3>Chetan Bhagat</h3>
            <span>Btech(IIT Roorkee)</span>
            <div class="share">
                <a href="#" class="fab fa-github"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="https://images.unsplash.com/photo-1587613842352-3022a317a088?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTQxfHxpaXQlMjB0ZWFjaGVyJTIwd2l0aCUyMGxhcHRvcHxlbnwwfHwwfHx8MA%3D%3D" alt="">
            <h3>Raghuram Ranjan</h3>
            <span>Mtech (NIT Rourkela)</span>
            <div class="share">
                <a href="#" class="fab fa-github"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="https://images.unsplash.com/photo-1603969409447-ba86143a03f6?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fGlpdCUyMHRlYWNoZXIlMjB3aXRoJTIwbGFwdG9wfGVufDB8fDB8fHww" alt="">
            <h3>Jayant Sinha</h3>
            <span>(Ex-SDE @Google )</span>
            <div class="share">
                <a href="#" class="fab fa-github"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="https://images.unsplash.com/flagged/photo-1574110906643-8311b0ce29d3?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTY4fHxpaXQlMjB0ZWFjaGVyfGVufDB8fDB8fHww" alt="">
            <h3>Jairam Ramesh</h3>
            <span>Mtech(Nit Raipur)</span>
            <div class="share">
                <a href="#" class="fab fa-github"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="https://images.unsplash.com/photo-1544168190-79c17527004f?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NDR8fGlpdCUyMHRlYWNoZXJ8ZW58MHx8MHx8fDA%3D" alt="">
            <h3>Amit Singhal</h3>
            <span>(Ex-SDE @Microsoft )</span>
            <div class="share">
                <a href="#" class="fab fa-github"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="https://images.unsplash.com/photo-1587691592099-24045742c181?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MzJ8fGlpdCUyMHRlYWNoZXJ8ZW58MHx8MHx8fDA%3D" alt="">
            <h3>Anmol Parasher</h3>
            <span>Btech(Kanpur)</span>
            <div class="share">
                <a href="#" class="fab fa-github"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

    </div>

</section>

<!-- faculty section ends -->


<!-- students section starts  -->

<section class="students" id="students">

    <h1 class="heading"> our selected <span>students </span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="https://plus.unsplash.com/premium_photo-1661687561711-6357ab1d1f75?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTN8fHN0dWRlbnQlMjB3aXRoJTIwbGFwdG9wfGVufDB8fDB8fHww" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 1st may, 2021 </a>
                    <a href="#"> <i class="fas fa-user"></i> by admin </a>
                </div>
                <h3>Placed at amazon </h3>
                <p>1Lakh/month
                    <br>
                    Stipend
                    
                </p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="https://images.unsplash.com/photo-1607459726370-d1abfcda1370?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fHN0dWRlbnQlMjB3aXRoJTIwbGFwdG9wfGVufDB8fDB8fHww" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 1st july, 2021 </a>
                    <a href="#"> <i class="fas fa-user"></i> by admin </a>
                </div>
                <h3>Placed at Microsoft</h3>
                <p>6Lakh/month
                    <br>
                   CTC
                     </p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="https://images.unsplash.com/photo-1513258496099-48168024aec0?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8aWl0JTIwc3R1ZGVudHxlbnwwfHwwfHx8MA%3D%3D" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 1st september, 2022 </a>
                    <a href="#"> <i class="fas fa-user"></i> by admin </a>
                </div>
                <h3>Placed at Google </h3>
                <p>1.5Lakh/month
                    <br>
                    Stipend
                     </p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>

    </div>

</section>

<!-- students section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="#"> <i class="fas fa-chevron-right"></i> home </a>            
            <a href="#"> <i class="fas fa-chevron-right"></i> about </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> Faculty </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> Students </a>
        </div>

        

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +91 8787228659 </a>
            <a href="#"> <i class="fas fa-phone"></i> +91 9125258090 </a>
            <a href="#"> <i class="fas fa-envelope"></i> sneha090@gmail.com </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> prayagraj, india - 21104 </a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-github"></i> github </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
        </div>

    </div>

    <div class="credit"> created by <span>MISS SNEHA JAISWAL</span> | all rights reserved </div>

</section>

<!-- footer section ends -->


















<!-- custom js file link  -->
<script>
    let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}
window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
}
</script>

</body>
</html>