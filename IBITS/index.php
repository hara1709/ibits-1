<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/73ad4c78b8.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="design/index_style.css">
    <link rel="stylesheet" href="design/register_style.css">
    <title>Document</title>
</head>
<body>
    
<div class="wrapper">
    <!-- nav bar -->
    <nav class="main-nav">
        <ul>
            <li> <a href="#"> <i class="fas fa-home fa-1x"></i> Home</a> </li>
            <li> <a href="#"> <i class="fas fa-info-circle fa-1x"></i> About</a> </li>
            <li> <a href="#"> <i class="fas fa-toolbox fa-1x"></i> Services</a> </li>
            <li> <a href="#"> <i class="fas fa-address-book fa-1x"></i> Contact</a> </li>
        </ul>
    </nav> 
    <!-- top container -->
    <section class="top-container">
        <header class="showcase">
            <h1> IBITS - PUPBC </h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                Magni, illo sunt eos iusto illum quia.</p>
            <a href="#" class="btn"> Read More</a>
        </header>
        <div class="top-box top-box-a">
            <h4> Be a Member of IBITS!</h4>
            <p class="price"> ₱100 </p>
            <a href="#" class="btn" id="modalBtn"> REGISTER </a>
        </div>
        <div class="top-box top-box-b">
           <img src="design/img/qr.jpg" width="250rem" height="250rem">
        </div>   
    </section>

    <!-- boxes lower section -->
    <section class="boxes">
        <div onclick="location.href='YOUR-URL-HERE';" style="cursor: pointer;" class="box">  
            <i class="fas fa-calendar-week fa-3x"></i>
            <h3>Events</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, fugit!</p>
        </div>
        <div onclick="location.href='YOUR-URL-HERE';" style="cursor: pointer;" class="box">
            <i class="fas fa-project-diagram fa-3x"></i>       
            <h3>Projects</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, fugit!</p>
        </div>
        <div onclick="location.href='YOUR-URL-HERE';" style="cursor: pointer;" class="box">
            <i class="fas fa-cog fa-3x"></i>
            <h3>Development</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, fugit!</p>
        </div>
        <div onclick="location.href='YOUR-URL-HERE';" style="cursor: pointer;" class="box">
            <i class="fas fa-users fa-3x"></i>
            <h3>Support</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, fugit!</p>
        </div>
    </section>

    <!-- information Section -->
 <section class="info">
     <img src="design/img/pic1.jpg" >
    <div> <h2> ALWAYS REMEMBER! </h2> 
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis voluptates numquam similique accusamus a distinctio veritatis enim itaque.
         Dolor sequi maxime voluptatibus rerum? Et cum explicabo perspiciatis sapiente porro distinctio?</p>
         <a href="#" class="btn"> Learn More</a>
        </div>
 </section>

<!-- portfolio section -->
<section class="portfolio">
    <img src="https://source.unsplash.com/random/200x200" alt="">
    <img src="https://source.unsplash.com/random/201x200" alt="">
    <img src="https://source.unsplash.com/random/202x200" alt="">
    <img src="https://source.unsplash.com/random/203x200" alt="">
    <img src="https://source.unsplash.com/random/204x200" alt="">
    <img src="https://source.unsplash.com/random/205x200" alt="">
    <img src="https://source.unsplash.com/random/206x200"alt="">
    <img src="https://source.unsplash.com/random/207x200" alt="">
    <img src="https://source.unsplash.com/random/208x200"alt="">
    <img src="https://source.unsplash.com/random/209x200" alt="">
</section>

<!-- footer -->
<footer>
    <p>Sample lang to mga badi eto yung base ng website</p>
</footer>



</div>


<!-- Code for register ui -->
<div id="simpleModal" class="modal">
    <div class="modal-content">
        <div class="modal-header">
        <span class="closeBtn">&times;</span>
        <h2>Become a Member</h2>
       </div>
       <div class="modal-body">

        <form action="#" method="POST" >   
                    <div>
                       <h5>Student No:</h5>
                       <input type="text" id="stud_ID" name="stud_ID" placeholder="Enter Student No: ">
                   </div>
                   <div>
                       <h5>Email:</h5>
                       <input type="text" id="email" name="email" placeholder="Enter Email: ">
                   </div>
                   <div>
                       <h5>Last Name:</h5>
                       <input type="text"  id="last_name"  name="lastName" placeholder="Enter lastname: ">
                   </div>
                   <div>
                       <h5>First Name:</h5>
                       <input type="text" id="first_name"   name="firstName" placeholder="Enter firstname: ">
                   </div>
                   <div>
                       <h5>Middle Name:</h5>
                       <input type="text"  id="middle_name" name="middleName" placeholder="Enter middlename: ">
                   </div>
                   <div>
                       <h5>Birthday:</h5>
                       <input type="date"  id="birthday" name="birthday" name="birthday">
                   </div>
                   <div>
                    <select class="select" id="course" name="course" >
                        <option disabled selected>COURSE</option>
                        <option value="BSIT">BSIT</option>
                        <option value="DICT">DICT</option>
                    </select>
                   </div>
            
       </div>
       <div class="modal-footer">
           <button id="submit" class="btnSubmit" onclick="return validate();" name="insertSub"> SUBMIT  </button>
           <input type="reset" value="RESET" class="reset">
           <a href="webcam.html" class="takepic"> TAKE A PHOTO </a>
       </div>

    </form>
    </div>
   </div>

   <?php
   $DBHost = "localhost";
   $DBUser ="root";
   $DBPass ="";
   $DBName="db_ibits";

       $conn = mysqli_connect($DBHost,$DBUser,$DBPass,$DBName);
       if(!$conn){
           die("connection failed:" . mysqli_error());
       }

       if(isset($_POST['insertSub']) !='') {
           $errZip = "";
           // If(preg_match("/^[0-9]{4}$/",$_POST['empID'])){
           $sql = " INSERT into tbl_register (`stud_ID`,`email`,`last_name`,`first_name`,`middle_name`,`birthday`,`course`) 
           values ('$_POST[stud_ID]','$_POST[email]','$_POST[lastName]','$_POST[firstName]','$_POST[middleName]','$_POST[birthday]','$_POST[course]')";
           $result = mysqli_query($conn,$sql);
               
               echo "<br>Recorded";
       // }
   }
?>
<script type="text/javascript"  src="script/validation.js"></script> 
<script type="text/javascript"  src="script/register_modal.js"></script>
 
</body>
</html>