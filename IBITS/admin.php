<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="design/admin_style.css">
    <script src="https://kit.fontawesome.com/73ad4c78b8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="design/admin_style.css">
    
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
    $query = "SELECT * FROM tbl_register";
    $query_run = mysqli_query($connection, $query);
?>

<table>
<thead>
<tr>
    <td>Student No</td>
    <td>Email</td>
    <td>Last Name</td>
    <td>First Name</td>
    <td>Middle Name</td>
    <td>Birthday</td>
    <td>Course</td>
    <td>Edit</td>
    <td>Delete</td>
</tr>
</thead>
<tbody>

<?php
    if(mysqli_num_rows($query_run) > 0){
        while ($row = mysqli_fetch_assoc($query_run)){
           ?>   
<tr>
    <td><?php echo $row['stud_ID']; ?></td>      
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['last_name']; ?></td>
    <td><?php echo $row['first_name']; ?></td>
    <td><?php echo $row['middle_name']; ?></td>
    <td><?php echo $row['birthday']; ?></td>
    <td><?php echo $row['course']; ?></td>
    <td>  
          <form action="register_edit.php" method="POST">
            <input type="hidden" name="edit_ID" value="<?php echo $row['stud_ID']; ?>">
            <button type="submit" name="edit_btn" class="btnEdit">  EDIT   </button> 
          </form>  
    </td>
            
    <td> 
            <form action="code.php" method="POST">
            <input type="hidden" name="del_ID" value="<?php echo $row['stud_ID']; ?>">
            <button type="submit" name="delete_btn" class="btnDelete">  DELETE </button> 
            </form>
    </td>
</tr>
<?php
        }
    }
    else {
         echo "no record found";
    }
?>
</tbody>
</table>
        </div>
    </div>
 

</body>
</html>