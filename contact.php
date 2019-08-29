<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html lang="zxx">
<?php
include "head.php";
?>
<body>
	<!-- header -->
	<?php
require "assets/header.php";
	?>
	<!-- //header -->
	<!-- banner -->
	<hr>
	<!-- //carosol -->
	<?php
require "assets/carosol.php";
	?>
	<!-- //banner -->
		<!--/contact-->
	<section class="contact py-5">
		<div class="container py-md-4 mt-md-3">
			<h2 class="heading-agileinfo">Contact <span>Us</span></h2>
			<span class="w3-line black"></span>
			<div class="inner-sec-w3layouts-agileinfo mt-md-5 pt-5">
				<div class="contact-map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3663.2468679784884!2d90.71392961449462!3d23.343069110132213!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3754f857c416e183%3A0xa9310aa46969d60!2sBaburpara+Goverment+Primary+School!5e0!3m2!1sen!2sbd!4v1546622276065" class="map" style="border:0" allowfullscreen=""></iframe>
				</div>
				
				<div class="contact_grid_right mt-5">
					<h6>Please fill this form to contact with us.</h6>
					<form action="#" method="post" enctype="multipart/form-data">
						<div class="contact_left_grid">
							<input type="text" name="name" placeholder="Name" required="">
							<input type="email" name="email" placeholder="Email" required="">
							<input type="text" name="subject" placeholder="Subject" required="">
							<input type="text" name="massage" placeholder="Massage..." required="">
							<input type="submit" name="sub" value="Submit">
							<input type="reset" value="Clear">
							<div class="clearfix"> </div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!--//contact-->

	<?php

require "database.php";
if (isset($_POST['sub'])){
	$name =$_POST['name'];
	$email =$_POST['email'];
	$subject =$_POST['subject'];
	$massage =$_POST['massage'];

	
	
$insertQuery1 = "insert into contact values(NULL,'$name','$email','$subject','$massage')";
// $insertQuery2 ="insert into ariticls values(NULL,'$ti','$de','$img')";

 echo $insertQuery1;
 $conn->query($insertQuery1); 
//  $conn->query($insertQuery2); 

//echo $insertQ;
//$conn->query($insertQ);

}


?>

<!--footer-->
	<?php
require "assets/footer.php";
	?>
<!-- //Modal -->
<!-- js-->
	<script src="js/jquery-2.2.3.min.js"></script>
<!-- js-->
	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.js ">
	</script>
	<!-- //Bootstrap Core JavaScript -->
</body>
</html>