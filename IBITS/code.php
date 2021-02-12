<?php
session_start();
$connection = mysqli_connect("localhost","root","","db_ibits");

if(isset($_POST['update_btn']))
{
    $stud_ID = $_POST['edit_ID']; 
    $email = $_POST['edit_email'];
    $last_name = $_POST['edit_lastName'];
    $first_name = $_POST['edit_firstName'];
    $middle_name = $_POST['edit_middleName'];
    $birthday = $_POST['edit_birthday'];
    $course = $_POST['edit_course'];
    
    $query = "UPDATE tbl_register SET  stud_ID='$stud_ID', email='$email', last_name='$last_name', first_name='$first_name', 
    middle_name='$middle_name', birthday='$birthday', course='$course'   WHERE stud_ID='$stud_ID' ";
    $query_run = mysqli_query($connection,$query);

    if($query_run){
        echo "<br>Your Data is Updated";
        header('location: admin.php');
    }
    else{
        echo  "<br>Your Data is not Updated";
        // header('location: admin.php');
    }

}


if(isset($_POST['delete_btn'])){
    $stud_ID = $_POST['del_ID'];
    $query = "DELETE FROM tbl_register WHERE stud_ID='$stud_ID' ";
    $query_run = mysqli_query($connection,$query);

    if($query_run){
        echo "<br>Your Data is deleted";
        header('location: admin.php');
    }
    else{
        echo  "<br>Your Data is not deleted";
        // header('location: admin.php');
    }




}





?>