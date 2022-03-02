<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Management System</title>
    <!-- CSS Link --> 
    <link rel="stylesheet" href="css/style.css">

    <!-- Bootstrap CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!--font awesome link--> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />



    <style>
        body
        {
            background: #1B2E3C;
        }
    </style>


</head>
<body>
    <?php require_once('./process.php'); ?>

    
    <?php
    $server="localhost";
    $username="root";
    $password="";
    $dbname="school_management_system";

    $conn=mysqli_connect($server,$username,$password,$dbname);

    if(isset($_POST['Admin_Login'])){
        $query="SELECT * FROM admin_login WHERE a_username='$_POST[Admin_Username]' AND a_password='$_POST[Admin_Password]'";
        $run = mysqli_query($conn,$query);

        $_SESSION['message']="Login Problem : The username & password you entered doesn’t belong to an account. Please check your username & password and try again.";
        $_SESSION['msg_type']="danger";

        if(mysqli_num_rows($run)==1){
            session_start();
            $_SESSION['AdminLoginId']=$_POST['Admin_Username'];
            header("location: admin_dashboard.php");
        }else{
            echo '';
        }
    }

    include('./partial/session.php')
?>

    

<section id="admin-id">
    <div class="container">

        <div class="admin-container">
            <h2>admin login panel</h2>
        <form action="" method="post">
            <div class="form-floating mb-3">
                <input type="text" name="Admin_Username" class="form-control" id="floatingInput" placeholder="Username">
                <label for="floatingInput"><i class="fa-solid fa-user-tie"></i> Username</label>
            </div>

            <div class="form-floating mb-3">
                <input type="password" name="Admin_Password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword"><i class="fa-solid fa-key"></i> Password</label>
            </div>


            <div class="form-floating d-grid mb-3">
                <button type="submit" name="Admin_Login" class="login_btn">Login</button>
            </div>

            <div class="text-center text-light">
                Don't have an account? <a href="./admin_signup.php">Signup</a>
            </div>

        </div>

        </form>
        </div>




    </div>
</section>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>