<?php 
		include 'db.php';


		session_start();

	if (isset($_POST['studentsubmit'])) {
		// From submit button

		$username = mysqli_real_escape_string($con, $_POST['username']);
		$password = md5($_POST['password']);

		// echo $username;
		// echo $password;
		$sql = "SELECT * FROM student WHERE regnumber = '$username' AND password = '$password'";
		$run_query = mysqli_query($con, $sql);
		$count = mysqli_num_rows($run_query);
		if ($count == 1) {
			$row = mysqli_fetch_array($run_query); 
			$_SESSION["studentonline"] = $row["regnumber"];
			$_SESSION["studentname"] = $row["firstname"];
				echo "Login Sucessful";
				$stdlogin = $_SESSION["studentonline"];
				echo $stdlogin;
				echo "<br>";
				
	echo "<a href='logout.php'>Logout</a>";
		}else{
		echo "Username and Password Do not Match";
		}
	}else{
		echo "Please! Relaod Page";
	}


 ?>



 <?php 
		include 'db.php';


		session_start();

	if (isset($_POST['adminsubmit'])) {
		// From submit button

		$username = mysqli_real_escape_string($con, $_POST['username']);
		$password = md5($_POST['password']);

		// echo $username;
		// echo $password;
		$sql = "SELECT * FROM student WHERE regnumber = '$username' AND password = '$password'";
		$run_query = mysqli_query($con, $sql);
		$count = mysqli_num_rows($run_query);
		if ($count == 1) {
			$row = mysqli_fetch_array($run_query); 
			$_SESSION["studentonline"] = $row["regnumber"];
			$_SESSION["studentname"] = $row["firstname"];
				echo "Login Sucessful";
				$stdlogin = $_SESSION["studentonline"];
				echo $stdlogin;
				echo "<br>";
				
	echo "<a href='logout.php'>Logout</a>";
		}else{
		echo "Username and Password Do not Match";
		}
	}else{
		echo "Please! Relaod Page";
	}


 ?>