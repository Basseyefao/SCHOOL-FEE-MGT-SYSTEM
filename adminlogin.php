<?php 

  session_start();
if (isset($_SESSION["adminid"]) && isset($_SESSION["adminname"])) {
  header('location:admindashboard.php');
// }
// elseif (isset($_SESSION["AdminId"]) && isset($_SESSION["AdminId"])) {
//   header('location:admin/');
}
else{}

 ?>

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
  <form action="adminlogin.php" method="post">
    <img class="mb-4" src="images/" alt="Loading" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">ADMIN SIGN IN PORTAL</h1>

    <div class="form-floating">
      <input name="username" required type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Admin ID</label>
    </div>
    <div class="form-floating">
      <input name="password" required type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-success" type="submit" name="adminsubmit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2023–2024</p>
  </form>
</main>

    
  </body>
</html>

 <?php 
    include 'db.php';


    session_start();

  if (isset($_POST['adminsubmit'])) {
    // From submit button

    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM admin WHERE adminnumber = '$username' AND password = '$password'";
    $run_query = mysqli_query($con, $sql);
    $count = mysqli_num_rows($run_query);
    if ($count == 1) {
      $row = mysqli_fetch_array($run_query); 
      $_SESSION["adminid"] = $row["adminnumber"];
      $_SESSION["adminname"] = $row["firstname"];
        echo "Login Sucessful";
        $Thesession = $_SESSION["adminid"];
        echo $stdlogin;
        echo "<br>";
        
  echo "<a href='logout.php'>Logout</a>";
    }else{
    echo "Username and Password Do not Match";
    }
  }//else{
    //echo "Please! Relaod Page";
  //}


 ?>