<?php include('./partial/header.php')?>


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

<?php include('./partial/admin_dashboard_navbar.php')  ?>

<section class="pt-5 mt-5">
    <div class="container">
        <div class="row justify-content-around">
            <div class="col-sm-3 mb-3">
                <h5>Dashboard</h5>
                <h6 class="text-dark">Welcome to School Management System</h6>
            </div>
            <div class="col-sm-3 mb-3 text-center">
                <img src="./img/school_logo.png" width="90" height="90" alt="">
                <h6 class="text-dark">Sample Logo</h6>
            </div>
            <div class="col-sm-3 text-end">
                <button class="btn btn-outline-primary">Current Student</button>
                <button class="btn btn-outline-success">New Invoice</button>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container-fluid search-container py-3">
        <h2 class="text-dark text-center mb-4">Student Quick Search</h2>
        <div class="row justify-content-around">
            <div class="col-sm-2 search-col mb-3">
                <h6 class="search-title">Search by Invoice Number</h6>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
            <div class="col-sm-2 search-col mb-3">
                <h6 class="search-title">Invoice Search by Student ID</h6>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
            <div class="col-sm-2 search-col mb-3">
                <h6 class="search-title">Student Progress Report</h6>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search">
                    <button class="btn btn-outline-success" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
            <div class="col-sm-2 search-col mb-3">
                <h6 class="search-title">Search by Student Name</h6>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
        </div>
    </div>
</section>


<section>
<div class="container">
  <div class="row justify-content-around">
    <div class="col-md-3 mb-3 last-col-link">
      Expense (Today) <br>
      <a href="#"><i class="fa-solid fa-arrow-right"></i> View</a>
    </div>
    <div class="col-md-3 mb-3 last-col-link">
      Unpaid Student Invoices <br>
      <a href="#"><i class="fa-solid fa-arrow-right"></i> View</a>
    </div>
    <div class="col-md-3 mb-3 last-col-link">
      Submit Fee <br>
      <a href="#"><i class="fa-solid fa-arrow-right"></i> View</a>
    </div>
  </div>
</div>
</section>

<section>
<div class="container">
  <div class="row justify-content-around">
    <div class="col-md-3 mb-3 last-col-link">
      Add Student Marks <br>
      <a href="#"><i class="fa-solid fa-arrow-right"></i> View</a>
    </div>
    <div class="col-md-3 mb-3 last-col-link">
      Income (Today) <br>
      <a href="#"><i class="fa-solid fa-arrow-right"></i> View</a>
    </div>
    <div class="col-md-3 mb-3 last-col-link">
      Expense (Today) <br>
      <a href="#"><i class="fa-solid fa-arrow-right"></i> View</a>
    </div>
  </div>
</div>
</section>


<section class="mb-5">
<div class="container">
  <div class="row justify-content-around">
    <div class="col-md-3 mb-3 last-col-link">
      Today Balance Sheet <br>
      <a href="#"><i class="fa-solid fa-arrow-right"></i> View</a>
    </div>
    <div class="col-md-3 mb-3 last-col-link">
      Current Teacher Data <br>
      <a href="#"><i class="fa-solid fa-arrow-right"></i> View</a>
    </div>
    <div class="col-md-3 mb-3 last-col-link">
      Student Admission Form <br>
      <a href="#"><i class="fa-solid fa-arrow-right"></i> View</a>
    </div>
  </div>
</div>
</section>


<?php include('./partial/footer.php')?>