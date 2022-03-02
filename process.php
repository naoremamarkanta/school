<?php
session_start();
$server="localhost";
$user="root";
$password="";
$db="school_management_system";

$conn=mysqli_connect($server,$user,$password,$db);

$update = false;
$student_id=0;
$student_name = "";
$student_address = "";
$student_phone = "";
$student_email = "";
$student_class = "";
$student_section= "";
$student_roll = "";
$student_dob = "";
$student_gender = "";

//Admin Signup Query
if(isset($_POST['admin_signin'])){
    $create_admin_user = $_POST['create_admin_user'];
    $create_admin_password = $_POST['create_admin_password'];

    $query = "INSERT INTO admin_login(a_user,a_password)VALUES('$create_admin_user','$create_admin_password')";
    $run = mysqli_query($conn,$query);

    $_SESSION['message']="Hi! you're now an admin.";
    $_SESSION['msg_type']="primary";

    header('location: index.php');
}

//Student Insert Query

if(isset($_POST['student_insert'])){
    $student_name    = $_POST['std_name'];
    $student_address = $_POST['std_address'];
    $student_phone   = $_POST['std_phone'];
    $student_email   = $_POST['std_email'];
    $student_class   = $_POST['std_class'];
    $student_section = $_POST['std_section'];
    $student_roll    = $_POST['std_roll'];
    $student_dob     = $_POST['std_dob'];
    $student_gender  = $_POST['std_gender'];

    $query = "INSERT INTO student(student_name,student_address,student_phone_number,student_email,student_class,student_section,student_roll_number,student_DOB,student_gender) 
    VALUES('$student_name','$student_address','$student_phone','$student_email','$student_class','$student_section','$student_roll','$student_dob','$student_gender')";

    $run = mysqli_query($conn,$query);
    $_SESSION['message']="Hello '$student_name'  You're Record has been saved!";
    $_SESSION['msg_type']="success";
    header('location: student.php');
}
//Student Edit Query
if(isset($_GET['student_edit_details'])){
    $student_id = $_GET['student_edit_details'];
    $update=true;
    $query = "SELECT * FROM student WHERE student_id=$student_id";
    $run = mysqli_query($conn,$query);

    while($db = mysqli_fetch_array($run)){
        $student_name    = $db['student_name'];
        $student_address = $db['student_address'];
        $student_phone   = $db['student_phone_number'];
        $student_email   = $db['student_email'];
        $student_class   = $db['student_class'];
        $student_section = $db['student_section'];
        $student_roll    = $db['student_roll_number'];
        $student_dob     = $db['student_DOB'];
        $student_gender  = $db['student_gender'];
    }
}

//Student Update Query
if(isset($_POST['student_update'])){
    $student_id      = $_POST['student_id'];
    $student_name    = $_POST['std_name'];
    $student_address = $_POST['std_address'];
    $student_phone   = $_POST['std_phone'];
    $student_email   = $_POST['std_email'];
    $student_class   = $_POST['std_class'];
    $student_section = $_POST['std_section'];
    $student_roll    = $_POST['std_roll'];
    $student_dob     = $_POST['std_dob'];
    $student_gender  = $_POST['std_gender'];

    $query = "UPDATE student SET
              student_name          ='$student_name',
              student_address       ='$student_address',
              student_phone_number  ='$student_phone',
              student_email         ='$student_email',
              student_class         ='$student_class',
              student_section       ='$student_section',
              student_roll_number   ='$student_roll',
              student_DOB           ='$student_dob',
              student_gender        ='$student_gender'
              WHERE student_id ='$student_id'";

    $run = mysqli_query($conn,$query);
    $_SESSION['message']="Hello '$student_name' You're Record has been updated!";
    $_SESSION['msg_type']="primary";
    header('location: student.php');
}

if(isset($_GET['delete_student_details'])){
    $student_id = $_GET['delete_student_details'];

    $query = "DELETE FROM student WHERE student_id='$student_id'";

    $run = mysqli_query($conn,$query);
    $_SESSION['message']="Record has been deleted!";
    $_SESSION['msg_type']="danger";
    header('location: student.php');
}


?>