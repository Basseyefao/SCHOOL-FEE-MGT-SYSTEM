<?php 
//DASHBOARD.PHP
	include 'db.php';
	session_start();
	
	$currentuser = $_SESSION['studentname'];
  $studentlastname = $_SESSION['studentlastname'];
	$currentuserid = $_SESSION['studentonline'];
 ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Dashboard | </title>
    

    <!-- Bootstrap core CSS -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }


      body {
  font-size: .875rem;
}

.feather {
  width: 16px;
  height: 16px;
  vertical-align: text-bottom;
}

/*
 * Sidebar
 */

.sidebar {
  position: fixed;
  top: 0;
  /* rtl:raw:
  right: 0;
  */
  bottom: 0;
  /* rtl:remove */
  left: 0;
  z-index: 100; /* Behind the navbar */
  padding: 48px 0 0; /* Height of navbar */
  box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
}

@media (max-width: 767.98px) {
  .sidebar {
    top: 5rem;
  }
}

.sidebar-sticky {
  position: relative;
  top: 0;
  height: calc(100vh - 48px);
  padding-top: .5rem;
  overflow-x: hidden;
  overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
}

.sidebar .nav-link {
  font-weight: 500;
  color: #333;
}

.sidebar .nav-link .feather {
  margin-right: 4px;
  color: #727272;
}

.sidebar .nav-link.active {
  color: #2470dc;
}

.sidebar .nav-link:hover .feather,
.sidebar .nav-link.active .feather {
  color: inherit;
}

.sidebar-heading {
  font-size: .75rem;
  text-transform: uppercase;
}

/*
 * Navbar
 */

.navbar-brand {
  padding-top: .75rem;
  padding-bottom: .75rem;
  font-size: 1rem;
  background-color: rgba(0, 0, 0, .25);
  box-shadow: inset -1px 0 0 rgba(0, 0, 0, .25);
}

.navbar .navbar-toggler {
  top: .25rem;
  right: 1rem;
}

.navbar .form-control {
  padding: .75rem 1rem;
  border-width: 0;
  border-radius: 0;
}

.form-control-dark {
  color: #fff;
  background-color: rgba(255, 255, 255, .1);
  border-color: rgba(255, 255, 255, .1);
}

.form-control-dark:focus {
  border-color: transparent;
  box-shadow: 0 0 0 3px rgba(255, 255, 255, .25);
}
    </style>

    
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#"><?php echo $currentuser ?> Dashboard</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> -->
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="logout.php">Sign out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="fees.php">
              <span data-feather="file"></span>
              Fees
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-muted" href="#">
              <span data-feather="shopping-cart"></span>
              Reports
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-muted" href="#">
              <span data-feather="users"></span>
              Assignment 
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-muted" href="#">
              <span data-feather="bar-chart-2"></span>
              Courses
            </a>
          </li>
          
        </ul>

        <!-- REMOVED -->
        
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Profile</h1>
        
        <!-- REMOVED	 -->
      </div>

      <h2><?php echo $studentlastname." ".$currentuser;  ?></h2>

      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">.</th>
              <th scope="col">.</th>
            </tr>
          </thead>
          <tbody>
            
          <?php 
                require 'db.php';
                $sql = "SELECT * FROM student WHERE regnumber = '$currentuserid' and lastname = '$studentlastname'";
                $run = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($run)) {
                
                ?>
                <tr>
                  <td>Fullname: </td>
                  <td><?php echo $row['firstname']; ?></td>
                </tr>
    
                <tr>
                  <td>Last name</td>
                  <td><?php echo $row['lastname']; ?></td>
                </tr>
                
                <tr>
                  <td>Gender: </td>
                  <td><?php echo $row['gender']; ?></td>
                </tr>
                  
                <tr>
                  <td>Phone: </td>
                  <td><?php echo $row['phone']; ?></td>
                </tr>
                  
                <tr>
                  <td>Department: </td>
                  <td><?php echo $row['dept']; ?></td>
                </tr>

                <tr>
                  <td>Level: </td>
                  <td><?php echo $row['level']; ?></td>
                </tr>
                  
                <?php
                }

              ?>
          
          </tbody>
        </table>
          <button class="btn btn-primary btn-sm" onclick="alert('In Progress...!')">Update </button>
      </div>
    </main>
  </div>

</div>


    <script src="assets/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
      <script src="dashboard.js"></script>
  </body>
</html>