<?php  
	/*session_start();
	if (isset($_SESSION["uid"])) {
		header("location:profile.php");
	}*/
?>



<?php 

  session_start();
if (isset($_SESSION["studentonline"]) && isset($_SESSION["studentname"])) {
  header('location:dashboard.php');
// }
// elseif (isset($_SESSION["AdminId"]) && isset($_SESSION["AdminId"])) {
//   header('location:admin/');
}
else{}

 ?>


<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/main.js"></script>
    <title>SCHOOL SYSTEM</title>


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



      /*
 * Globals
 */


/* Custom default button */
.btn-secondary,
.btn-secondary:hover,
.btn-secondary:focus {
  color: #333;
  text-shadow: none; /* Prevent inheritance from `body` */
}


/*
 * Base structure
 */

body {
  text-shadow: 0 .05rem .1rem rgba(0, 0, 0, .5);
  box-shadow: inset 0 0 5rem rgba(0, 0, 0, .5);
}

.cover-container {
  max-width: 42em;
}


/*
 * Header
 */

.nav-masthead .nav-link {
  padding: .25rem 0;
  font-weight: 700;
  color: rgba(255, 255, 255, .5);
  background-color: transparent;
  border-bottom: .25rem solid transparent;
}

.nav-masthead .nav-link:hover,
.nav-masthead .nav-link:focus {
  border-bottom-color: rgba(255, 255, 255, .25);
}

.nav-masthead .nav-link + .nav-link {
  margin-left: 1rem;
}

.nav-masthead .active {
  color: #fff;
  border-bottom-color: #fff;
}



    </style>

    
    <!-- Custom styles for this template -->
    <!--link href="cover.css" rel="stylesheet" -->
  </head>
  <body class="d-flex h-100 text-center text-white bg-dark">
    
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="mb-auto">
    <div>
      <h3 class="float-md-start mb-0">School System</h3>
      <!-- <nav class="nav nav-masthead justify-content-center float-md-end">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        <a class="nav-link" href="#">Features</a>
        <a class="nav-link" href="#">Contact</a>
      </nav> -->
    </div>
  </header>

  <main class="px-3">
    <h1>SCHOOL SYSTEM.</h1>
    <p class="lead">This System Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <p class="lead">
      <a href="landing.php" class="btn btn-lg btn-primary fw-bold border-white bg-blue">Proceed ></a>
    </p>
  </main>

  <footer class="mt-auto text-white-50">
    <p>System for  <a href="#" class="text-white">Computer Science Department</a>, by <a href="mailto:efabassey69@gmail.com" class="text-white">Developer</a>.</p>
  </footer>
</div>


    
  </body>
</html>


<!DOCTYPE html>

</body>
</html>