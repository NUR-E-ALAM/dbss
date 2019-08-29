<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: index.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: index.php");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Penal</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	
</head>
<body>
	
	
<div class="container">
		
	<div class="row">
	<div class="col-12 text-right">
	  <!-- logged in user information -->
	  <?php  if (isset($_SESSION['username'])) : ?>
			<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
			<p> <a href="index.php?logout='1'" class="btn btn button">logout</a> </p>
		<?php endif ?>
  <!-- notification message -->
  <?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>
	</div>
	</div>
	</div>
		<!--daesboard-->
		<div class="row">

  <div class="col-2 p-3 mb-2 bg-info text-black">
  <h1 class="p-2">Dashboard</h1>
 
 <a href="registration.php" class="text-white p-3" target="m">Registration</a><br>
 <a href="show_del_reg.php" class="text-white p-3" target="m">Registration_del</a><br>
 
  </div>
  <div class="col-9 text-right" >
   
	
  <iframe src="" class="p-3 mb-2" width="100%" height="600px" frameborder="0" name="m">
  </iframe>
 
  </div>
</div>
</body>
</html>