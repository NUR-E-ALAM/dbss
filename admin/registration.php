
<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Course Registration Form Flat Responsive Widget Template :: w3layouts</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Course Registration Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<link href="css/styler.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<!-- //js -->
<!-- web-fonts -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<!-- //web-fonts --> 
<style>
.gander{
	color: white;
}
</style>
</head>
<body>
	<!-- banner --> 
<div class="video"> 
	<div class="center-container">
	    <div class="w3ls-agileinfo">
			<h1> Course Registration Form </h1>	
		</div>
		 <div class="bg-agile">
			<h2>Training Course </h2>
			<div class="login-form">	
				<form  method="post" enctype="multipart/form-data">
					<input type="text"  name="name" placeholder="Name" required="" />
					<input type="text"  name="fname" placeholder="Father's Name" required="" />
					<input type="text"  name="mname" placeholder="Mother's Name" required="" />
					
					
					<div class="left-w3-agile">
					<input type="text"  name="village" placeholder="Village" required="" />
					<input type="text"  name="post" placeholder="Post Office" required="" />
					<br><br>
					<div class="gander form-control">
						Gender :<input type ="radio" name ="gander" value ="Man">Man
						<input type ="radio" name ="gander" value ="Woman">Woman	</div>
				
					</div>
					<div class="right-agileits">
					
					<input type="text"  name="thana" placeholder="Thana" required="" />
					<input type="text"  name="district" placeholder="District" required="" />
					<input type="text"  name="blood" placeholder="Blood Group" required="" />
					</div>
					
					
				
					<input type="text"  name="qly" placeholder="Qualification" required="" />
				
					<input type="text"  name="number" placeholder="Phone Number" required="" />
					<input type="email"  name="email" placeholder="Email Address" required="" />
					
					<input type ="text" placeholder="amount"  name="amount" >
					<lable class="gander form-control">Date of Birth :</lable>
					<input type ="date"  name="dob" >
					<lable>
        <input type="file" class="form-control" name="img"></lable>
						
						
					<input type="submit" name="sub" value="Submit">
					<input type="reset" value="Clear">
				</form>	
			</div>	
		</div>
	<!-- //banner --> 
	 <!--copyright-->
		<div class="copy w3ls">
		    <p>&copy; 2018 Course Registration Form . All Rights Reserved  | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
	    </div>
	<!--//copyright-->
	</div>	
</div>
<?php

require "database.php";
if (isset($_POST['sub'])){
    move_uploaded_file($_FILES['img']['tmp_name'],"load/".$_FILES['img']['name']);
	$name =$_POST['name'];
	$fname =$_POST['fname'];
	$mname =$_POST['mname'];
	$village =$_POST['village'];
	$post =$_POST['post'];
	$gander =$_POST['gander'];
	$dob =$_POST['dob'];
	$thana =$_POST['thana'];
	$district =$_POST['district'];
	$blood =$_POST['blood'];
	
	$qly =$_POST['qly'];
	$number =$_POST['number'];
	$email =$_POST['email'];
	
	$amount =$_POST['amount'];
	$img =$_FILES['img']['name'];
	
	
$insertQuery1 = "insert into members values(NULL,'$name','$fname','$mname','$village','$post','$gander','$dob','$thana','$district','$blood','$qly','$number','$email','$amount','$img')";
// $insertQuery2 ="insert into ariticls values(NULL,'$ti','$de','$img')";

 echo $insertQuery1;
 $conn->query($insertQuery1); 
//  $conn->query($insertQuery2); 

//echo $insertQ;
//$conn->query($insertQ);

}


?>

<script type="text/javascript">
					$(window).load(function() {
						$("#flexiselDemo1").flexisel({
							visibleItems: 2,
							animationSpeed: 1000,
							autoPlay:false,
							autoPlaySpeed: 2500,    		
							pauseOnHover: true,
							enableResponsiveBreakpoints: true,
							responsiveBreakpoints: { 
								portrait: { 
									changePoint:480,
									visibleItems: 1
								}, 
								landscape: { 
									changePoint:640,
									visibleItems:1
								},
								tablet: { 
									changePoint:768,
									visibleItems: 1
								}
							}
						});
						
					});
			</script>
			<script type="text/javascript" src="js/jquery.flexisel.js"></script>
</body>
</html>