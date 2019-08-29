<?php
require "database.php";
?>
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
	<?php
require "assets/carosol.php";
	?>
	<!-- //banner -->
		<!--gallery-->
	<section class="gallery py-5">
		<div class="container py-md-4 mt-md-3">
			<h2 class="heading-agileinfo">Our <span>Gallery</span></h2>
			<span class="w3-line black"></span>
			
			<div class="row gallery-info mt-md-5 pt-5">
			<?php 
$selectname="select * from members";
$result=$conn->query($selectname);
if ($result->num_rows > 0) {
    while ($row1=$result->fetch_assoc()) {
        ?>
				<div class="col-md-3 col-sm-6 gallery-grids">
				
					<a href="admin/load/<?php echo $row1['image']; ?>" height="250px"  class="gallery-box" data-lightbox="example-set" data-title="">
					<img src="admin/load/<?php echo $row1['image']; ?>" height="250px" class="img gallery-box" data-lightbox="example-set" alt="Card image cap">
					</a>
					<div class="card-body w3ls-card">
					<a href="single.php?id=<?php echo $row1['id'];?>"><?php echo $row1['name']; ?></a>
					</div>
				</div>
				<?php
    }
}?>
				 
			</div>
					<script src="js/lightbox-plus-jquery.min.js"></script>
		</div>
		
	
</section>
<!--//gallery-->

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