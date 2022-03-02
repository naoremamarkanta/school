<?php include('partial/header.php') ?>
<?php
session_start();
if(!isset($_SESSION['AdminLoginId'])){
    header("location: index.php");
}


if(isset($_POST['AdminLogout'])){
    session_destroy();
    header('location: index.php');
}

?>
<?php include('./partial/admin_dashboard_navbar.php') ?>

<section class="py-5">
    <div class="container-fluid py-5">

    <?php include('partial/session.php') ?>
        <div class="row mb-3">  
            <div class="col-sm-6">
                <h1 class="title">Student Details</h1>
            </div>

            <div class="col-6 text-sm-end">
                <div class="form-floating">
                    <button class="insert_btn"><a href="./student_insert.php">Add New Student</a></button>
                </div>
            </div>
        </div>

        <?php
 
        $server="localhost";
        $user="root";
        $password="";
        $db="school_management_system";

        $conn=mysqli_connect($server,$user,$password,$db);

        $query = "SELECT * FROM student";

        $run = mysqli_query($conn,$query);

        ?>


        <table class="table table-striped table-hover">

            <tr>
                <thead class="table-bordered">
                    <th>Sl. No.</th>
                    <th>Student ID</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Phone No.</th>
                    <th>Email</th>
                    <th>Class</th>
                    <th>Section</th>
                    <th>Roll No.</th>
                    <th>Date of Birth</th>
                    <th>Gender</th>
                    <th colspan="2">Action</th>
                </thead>
            </tr>
            <?php
                $sl_no=1;
                while($db=mysqli_fetch_array($run)){
            ?>
            <tr>
                <tbody>
                    <td><?php echo $sl_no;                      ?> </td>
                    <td><?php echo $db['student_id'];           ?> </td>
                    <td><?php echo $db['student_name'];         ?> </td>
                    <td><?php echo $db['student_address'];      ?> </td>
                    <td><?php echo $db['student_phone_number']; ?> </td>
                    <td><?php echo $db['student_email'];        ?> </td>
                    <td><?php echo $db['student_class'];        ?> </td>
                    <td><?php echo $db['student_section'];      ?> </td>
                    <td><?php echo $db['student_roll_number'];  ?> </td>
                    <td><?php echo $db['student_DOB'];          ?> </td>
                    <td><?php echo $db['student_gender'];       ?> </td>
                    <td>
                        <a href="student_insert.php?student_edit_details=<?php echo $db['student_id']; ?>">
                            <i class="fa-solid fa-pen-to-square text-primary"></i>
                        </a>
                    </td>
                    <td>
                        <a href="process.php?delete_student_details=<?php echo $db['student_id']; ?>">
                            <i class="fa-solid fa-trash-can text-danger"></i>
                        </a>
                    </td>
                </tbody>
            </tr>
            <?php 
                $sl_no++;
                }
            ?>
            
        </table>


        
        
    </div>
</section>

<?php include('partial/footer.php') ?>