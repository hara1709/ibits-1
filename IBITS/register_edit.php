<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/73ad4c78b8.js" crossorigin="anonymous"></script>
   
    <link rel="stylesheet" href="design/register_edit_style.css">
    <title>Document</title>
</head>
<body>
    <input type="checkbox"  id="check">

    <!-- header area start -->
    <header>
        <label for="check">
            <i class="fas fa-bars" id="sidebar_btn"></i>
        </label>
        <div class="left_area">
            <img src="design/img/logo.png">
            <h3>IBITS - <span>PUPBC</span></h3>
        </div>
        <div class="right_area">
            <a href="index.php" class="logout_btn"> Logout </a>
        </div>
    </header>
    <!-- header end -->

    <!-- sidebar -->
    <div class="sidebar">
        <center>
            <i class="fas fa-user fa-4x"></i>
            <h4>admin</h4>
        </center>
        <a href="#"> <i class="fas fa-desktop"></i> <span>Dashboard</span> </a>
        <a href="#"> <i class="fas fa-cogs"></i> <span>Components</span> </a>
        <a href="#"> <i class="fas fa-table"></i> <span>Tables</span> </a>
        <a href="#"> <i class="fas fa-th"></i> <span>Forms</span> </a>
        <a href="#"> <i class="fas fa-info-circle"></i> <span>About</span> </a>
        <a href="#"> <i class="fas fa-sliders-h"></i> <span>Settings</span> </a>
    </div>
    <!-- sidebar end -->

    <div class="content">
        <div class="tbl-container">
            <?php

            $connection = mysqli_connect("localhost","root","","db_ibits");
            if(isset($_POST['edit_btn']))
            {
                $stud_ID = $_POST['edit_ID'];   
                $query = "SELECT * FROM tbl_register WHERE stud_ID='$stud_ID' ";
                $query_run = mysqli_query($connection,$query);

                foreach($query_run as $row){
                    ?>
        

            <form action="code.php" method="POST">
                <div>
                    <h5>Student No:</h5>
                    <input type="text" id="stud_ID" name="edit_ID" value="<?php echo $row['stud_ID'] ?>" placeholder="Enter Student No: " readonly>
                </div>
                <div>
                    <h5>Email:</h5>
                    <input type="text" id="email" name="edit_email" value="<?php echo $row['email'] ?>" placeholder="Enter Email: ">
                </div>
                <div>
                    <h5>Last Name:</h5>
                    <input type="text"  id="last_name"  name="edit_lastName" value="<?php echo $row['last_name'] ?>" placeholder="Enter lastname: ">
                </div>
                <div>
                    <h5>First Name:</h5>
                    <input type="text" id="first_name"   name="edit_firstName" value="<?php echo $row['first_name'] ?>" placeholder="Enter firstname: ">
                </div>
                <div>
                    <h5>Middle Name:</h5>
                    <input type="text"  id="middle_name" name="edit_middleName" value="<?php echo $row['middle_name'] ?>" placeholder="Enter middlename: ">
                </div>
                <div>
                    <h5>Birthday:</h5>
                    <input type="date"  id="birthday" name="edit_birthday" name="birthday" value="<?php echo $row['birthday'] ?>">
                </div>
                <div>
                <select class="select" id="course" name="edit_course"  value="<?php echo $row['course'] ?>">
                <option disabled selected>COURSE</option>
                <option value="BSIT">BSIT</option>
                <option value="DICT">DICT</option>
                </select>
                <br>
                <br>
                </div>
                    <a href="admin.php" class="btn">cancel</a>
                    <button type="submit" name="update_btn" class="btn"> update </button>
            </form>
                    <?php
                    }
                }
                ?>    
        </div>
    </div>
 


</body>
</html>