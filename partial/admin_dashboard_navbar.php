<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="./admin_dashboard.php">Admin Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto mb-3">
        
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle navbar-text text-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Students
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="./student_insert.php">Add New Student</a></li>
            <li><a class="dropdown-item" href="./student.php">View Student Details</a></li>
            <li><a class="dropdown-item" href="partial/attendance_monitoring.php">Attendance</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link navbar-text text-dark" href="#">Teacher</a>
        </li>
        <li class="nav-item">
          <a class="nav-link navbar-text text-dark" href="#">Admin/Other Staff</a>
        </li>
        <li class="nav-item">
          <a class="nav-link navbar-text text-dark" href="#">Classes</a>
        </li>
        <li class="nav-item navbar-li">
          <a class="nav-link navbar-text text-dark" href="#">Fee/Invoices</a>
        </li>
        <li class="nav-item">
          <a class="nav-link navbar-text text-dark" href="#">Transport</a>
        </li>
        <li class="nav-item">
          <a class="nav-link navbar-text text-dark" href="#">Subjects</a>
        </li>
        <li class="nav-item">
          <a class="nav-link navbar-text text-dark" href="#">Accounts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link navbar-text text-dark" href="#">Reports</a>
        </li>
        <li class="nav-item">
          <a class="nav-link navbar-text text-dark" href="#">Generate Invoices</a>
        </li>
        <li class="nav-item">
          <a class="nav-link navbar-text text-dark" href="#">Users</a>
        </li>
      </ul>

      <ul class="navbar-nav ms-auto">
          <li class="nav-item"><button type="submit" class="btn btn-primary" name="AdminLogout">Logout</button></li>
      </ul>
    </div>
  </div>
</nav>
