<?php 			

	/*if (isset($_GET['id'])) {
		// code...
		$id = $_GET['id'];
		echo $id."<br>";
		echo "string";
	}

*/
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>GENERATE</title>
 </head>
 <body>
 	<?php 

 		$rnd1 = rand(2990, 1000);
 		$rnd2 = rand(1000, 4000);
 		$rnd3 = rand(7000, 1000);
 		echo $rnd1."-".$rnd2."-".$rnd3;
 		
 	 ?>
 		<div class="container">
 			<p class="row">
 				<div class="col-md-3">
 					
 				</div>
 				<div class="col-md-6">
		 				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		 				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		 				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		 				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		 				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		 				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
 				</div>
 				<div class="col-md-3"></div>
 			
 		</div>
 </body>
 </html>