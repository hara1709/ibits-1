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
    <title>IBITS WEB PAGE</title>
</head>
<body>
    
<div class="wrapper">
    <!-- nav bar -->
    <nav class="main-nav">
        <ul>
            <li> <a href="#"> <i class="fas fa-home fa-1x"></i> Home</a> </li>
			<li> <a href="#"> <i class="fas fa-calendar fa-1x"></i> Events</a> </li>
            <li> <a href="AboutUs.php"> <i class="fas fa-info-circle fa-1x"></i> About</a> </li>
            <li> <a href="contact.php"> <i class="fas fa-address-book fa-1x"></i> Contact</a> </li>

        </ul>
    </nav> 
    <!-- top container -->
    <section class="top-container">
        <header class="showcase">
            <h1> IBITS - PUPBC </h1>
            <p> This is the unofficial webpage of PUP iBITS. All announcements and updates will be posted here! </p>
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

    <!-- information Section -->
 <section class="info">
     <img src="design/img/pic1.jpg" >

    <div><h1> STAY HOME, SAVE LIVES. </h1>
	<br>

	<h3> Practice frequent handwashing </h3>
    <p>Remember to wash your hands as often as you can to better protect your health. </p>
	<br>
	<h3> Practice proper cough etiquette </h3>
	<p>Covering coughs and sneezes and keeping hands clean can help prevent the COVID-19. </p>
	<br>
	<h3> If you have cough, use mask </h3>
	<p> It’s best to change into a new mask when the one you’re wearing gets soiled after you cough or sneeze into it. </p>
	<br>
	<h3> Avoid handshake </h3>
	<p> People are also abstaining from giving pecks on the cheek, hugs and high-fives as they try to minimise the the risk of contracting it and prevent it from spreading. </p>
	<br>
	<h3> If symptoms appear consult your doctor </h3>
	<p> Be clear and concise when describing your symptoms. Your description helps the doctor identify the problem.</p>
	
	<br>
	<br>
         <a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/advice-for-public" class="btn"> Learn More</a>
        </div>
 </section>



<!-- footer -->
<footer>
    
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