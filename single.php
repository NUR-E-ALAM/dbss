<?php
require "database.php";
?>
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
		<!-- /services -->


<!-- //services -->
<!-- news -->
<hr>
<div class="container">
<div class="row">
<div class="col-md-4">
<?php 

if (isset($_GET['id'])) {
    $memberid = $_GET['id'];
    $selectname="select * from members where id='$memberid'";
    $result=$conn->query($selectname);
    if ($result->num_rows > 0) {
        while ($row1=$result->fetch_assoc()) {
            ?>
			<img class="img" height="250px" width="300px" src="admin/load/<?php echo $row1['image']; ?>" alt="">
</div>

<div class="col-md-6">
<table class="table table-striped">
<tr>
<td width="150">Name </td>
    <td width="10">:</td>
    <td><?php echo $row1['name']; ?></td>
</tr>
<tr>
    <td width="150">Phone </td>
	<td width="10">:</td>
    <td><?php echo $row1['phone']; ?></td>
  </tr>
  <tr>
    <td width="150">Email </td>
	<td width="10">:</td>
    <td><?php echo $row1['email']; ?></td>
  </tr>
  <tr>
    <td width="150">Amount </td>
	<td width="10">:</td>
    <td><?php echo $row1['amount1']; ?></td>
  </tr>
</table>
</div>
</div>
<hr>



            </div>
            <div class="container">
			<table class="table table-striped" width="500"  border="1">
  <tr >
    
  <tr>
    <td width="150">Father's Name </td>
	<td width="10">:</td>
    <td><?php echo $row1['fathers_name']; ?></td>
  </tr>
  <tr>
    <td width="150">Mother's Name </td>
	<td width="10">:</td>
    <td><?php echo $row1['mothers_name']; ?></td>
  </tr>
  <tr>
    <td width="150">Village </td>
	<td width="10">:</td>
    <td><?php echo $row1['village']; ?></td>
  </tr>
  <tr>
    <td width="150">Post Office </td>
	<td width="10">:</td>
    <td><?php echo $row1['post_office1']; ?></td>
  </tr>
  <tr>
    <td width="150">Thana </td>
	<td width="10">:</td>
    <td><?php echo $row1['thana']; ?></td>
  </tr>
  <tr>
    <td width="150">District </td>
	<td width="10">:</td>
    <td><?php echo $row1['district']; ?></td>
  </tr>
  <tr>
    <td width="150">Gender </td>
	<td width="10">:</td>
    <td><?php echo $row1['gender']; ?></td>
  </tr>
  <tr>
    <td width="150">Date of Birth </td>
	<td width="10">:</td>
    <td><?php echo $row1['date_of_brith']; ?></td>
  </tr>
  <tr>
    <td width="150">Blood Group </td>
	<td width="10">:</td>
    <td><?php echo $row1['blood_group']; ?></td>
  </tr>
  <tr>
    <td width="150">Qualification </td>
	<td width="10">:</td>
    <td><?php echo $row1['qualification']; ?></td>
  </tr>
  
  
  
  
</table>

</div>
<!-- //news -->

		<?php
        }
    }
}?>
<!--footer-->
<?php
require "assets/footer.php";
?>
	<!-- Modal -->
<
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