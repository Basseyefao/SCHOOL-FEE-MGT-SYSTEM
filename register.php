<!-- Register.php -->


<!doctype html>
<html lang="en">
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


      /*SIGN IN*/
        html,
body {
  height: 100%;
}

body {
  display: flex;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #f5f5f5;
}

.form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: auto;
}

.form-signin .checkbox {
  font-weight: 400;
}

.form-signin .form-floating:focus-within {
  z-index: 2;
}

.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
    </style>

    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin">
  <form action="register.php" method="post">
    <h1 class="h3 mb-3 fw-normal">STUDENT REGISTRATION</h1>

    <div class="form-floating">
      <input name="studentregnumber" required type="text" class="form-control" id="floatingInput" placeholder="">
      <label for="floatingInput">Registration Number</label>
    </div>

    <div class="form-floating">
      <input name="password" required type="text" class="form-control" id="floatingInput" placeholder="">
      <label for="floatingInput">Password</label>
    </div>

    <div class="form-floating">
      <input name="studentfirstname" required type="text" class="form-control" id="floatingInput" placeholder="">
      <label for="floatingInput">First Name</label>
    </div>

    <div class="form-floating">
      <input name="studentlastname" required type="text" class="form-control" id="floatingInput" placeholder="">
      <label for="floatingInput">Last Name</label>
    </div>
    
    <div class="form-floating">
      <input name="studentphonenumber" required type="text" class="form-control" id="floatingInput" placeholder="">
      <label for="floatingInput">Phone Number</label>
    </div>
    
    <div class="form-floating">
      <select name="Gender" class="form-control "id="floatingInput">
        <option>Male</option>
        <option>Female</option>
      </select>
      <label for="floatingInput">Gender</label>
    </div>
    
    <div class="form-floating">
      <input name="department" required type="text" class="form-control" id="floatingInput" placeholder="">
      <label for="floatingInput">Department</label>
    </div>

    <p></p>
    <button class="w-100 btn btn-lg btn-primary" type="submit" name="registerbtn">Sign in</button>
    <br>
    <p><br></p>
    <p><a class="btn btn-sm btn-warning" href="adminlogin.php">Admin</a> | <a class="btn btn-sm btn-dark" href="register.php">Student Log in</a></p>
    <p class="mt-5 mb-3 text-muted">&copy; 2023–2024</p>
  </form>
</main>

    
  </body>
</html>

<?php 
	session_start();

	include "db.php";

	if (isset($_POST["registerbtn"])) {
		
		extract($_POST);
  
		//INSERT REGISTER
		$sql = "INSERT INTO `school_system`.`student` (`id`, `regnumber`, `password`, `firstname`, `lastname`, `phone`, `gender`, `dept`) VALUES (NULL, '$studentregnumber', md5('$password'), '$studentfirstname', '$studentlastname', '$studentphonenumber', '$Gender', '$department')";
		$run_query = mysqli_query($con, $sql);
		if (!$run_query) {
			echo 'ERROR OCCURED!';
		}else{
      if (isset($_SESSION['admin'])) {
        // code...
        echo "Saved";
      }else{
        echo 'Err! CONTACT ADMIN!';
      }
      
    }
	}
 ?>

