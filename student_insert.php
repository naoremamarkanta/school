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
<?php require_once('./process.php'); ?>
 
    <section>
        <div class="container container_class">
        
        <!-- Page title area --> 
        <div>
            <?php if($update==true): ?>
            <h1 class="title">Update Student Details</h1>
            <?php else: ?>
            <h1 class="title">Add New Student</h1>
            <?php endif; ?>
        </div>




        
        <form action="process.php" method="post">

        <input type="hidden" name="student_id" value="<?php echo $student_id; ?>">
        
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="std_name" value="<?php echo $student_name; ?>" id="floatingInput" placeholder="Student Name">
            <label for="floatingInput">Student Name</label>
        </div>

        
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="std_address" value="<?php echo $student_address; ?>" id="floatingInput" placeholder="Student Name">
            <label for="floatingInput">Address</label>
        </div>
         
        
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="std_phone" value="<?php echo $student_phone; ?>" id="floatingInput" placeholder="Student Name">
            <label for="floatingInput">Phone Number</label>
        </div>

        
        <div class="form-floating mb-3">
            <input type="email" class="form-control" name="std_email" value="<?php echo $student_email; ?>" id="floatingInput" placeholder="Student Name">
            <label for="floatingInput">Email</label>
        </div>
        

        <div class="form-floating mb-3">
            <select class="form-select" name="std_class" value="<?php echo $student_class; ?>" id="floatingSelect" aria-label="Floating label select example">
                <option selected>Choose Student Class</option>
                <option value="11">11th</option>
                <option value="12">12th</option>
                <option value="BCA">BCA</option>
            </select>
            <label for="floatingSelect">Class</label>
        </div>

        
        <div class="form-floating mb-3">
            <select class="form-select" name="std_section" value="<?php echo $student_section; ?>" id="floatingSelect" aria-label="Floating label select example">
                <option selected>Choose Student Section</option>
                <option value="11_A">11 (A)</option>
                <option value="11_B">11 (B)</option>
                <option value="12_A">12 (A)</option>
                <option value="12_B">12 (B)</option>
                <option value="BCA_A">BCA (A)</option>
                <option value="BCA_B">BCA (B)</option>
            </select>
            <label for="floatingSelect">Section</label>
        </div>

                
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="std_roll" value="<?php echo $student_roll; ?>" id="floatingInput" placeholder="Student Roll Number">
            <label for="floatingInput">Student Roll Number</label>
        </div>


        <div class="form-floating mb-3">
        <div class="form-check form-check-inline form-control">
            <label class="form-check-label" for="inlineRadio1">Gender</label> &nbsp;

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="std_gender" id="inlineRadio1" value="Male">
            <label class="form-check-label" for="inlineRadio1">Male</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="std_gender" id="inlineRadio2" value="Female">
            <label class="form-check-label" for="inlineRadio2">Female</label>
        </div>
                

        </div>
        </div>



        <div class="form-floating mb-3">
            <input type="date" class="form-control" name="std_dob" value="<?php echo $student_dob; ?>" id="floatingInput" placeholder="Student Roll Number">
            <label for="floatingInput">Student Date of Birth</label>
        </div>

        
        <div class="form-floating d-grid">
            <?php if($update==true): ?>
                <button type="submit" name="student_update" class="submit_btn">Update</button>
            <?php else: ?>
                <button type="submit" name="student_insert" class="insert_btn">Submit</button>
            <?php endif; ?>
        </div>


        </form>
        </div>
    </section>


    <?php include('partial/footer.php') ?>