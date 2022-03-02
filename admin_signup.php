<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Management System</title>
    <!--CSS Link--> 
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <!-- Font Awesome link--> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />



</head>
<body>
    <?php require_once('process.php');?>
<section class="readers_section">
    <div class="container signup_container">

    <div class="admin-signin">
    <h2 class="mb-5">create account</h2>
        <form action="process.php" method="post">
        
                <div class="form-floating mb-3">
                    <td>
                        <input 
                            type="text" 
                            name="create_admin_username" 
                            id="unit_label" 
                            class="form-control"
                            placeholder="Create your username"
                            >
                        </td>
                    <label 
                        for="unit_label" 
                        class="form-label">
                        <i class="fa-solid fa-user-tie"></i>  
                        Username
                    </label>
                </div>

                
                <div class="form-floating mb-3">
                    <td>
                        <input 
                            type="password" 
                            name="create_admin_password" 
                            id="unit_label" 
                            class="form-control"
                            placeholder="Create your password"
                            >
                        </td>
                    <label 
                        for="unit_label" 
                        class="form-label">
                        <i class="fa-solid fa-key"></i> 
                        Password
                    </label>
                </div>

        

        <div class="form-floating d-grid mb-3">
            <button type="submit" name="admin_signin" class="signin_btn">Signin</button>
        </div>

        <div class="text-center">
            <p class="text-dark">Already have an account. <a href="./index.php">Login</a></p> 
        </div>

        </form>
    </div>

    </div>
</section>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>