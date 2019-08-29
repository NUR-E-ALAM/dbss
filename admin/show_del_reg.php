<?php
require "database.php";
?>
<style>
th {
    background-color: rgba(0, 255, 0, 0.3);}  /* green with opacity */
}

</style>
<section id="main-content">
      <section class="wrapper">
      

<table class="table table-hover">
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Father's Name</th>
    <th>Mother's Name</th>
    <th>Village</th>  
    <th>Post</th>  
    <th>Gender</th>  
    <th>Date of Brith</th>  
    <th>Thana</th>  
    <th>District</th>  
    <th>Blood Group</th>  
    <th>Qualification</th>  
    <th>Phone</th>  
    <th>Email</th>  
    <th>Amount</th>  
    <th>Imgage</th>  
    <th>Action</th>  
    </tr>
<?php
$query = "select * from members";
// Create a statement object
$stmt = $conn->stmt_init();
// Prepare the statement for execution
$stmt->prepare($query);
// Execute the statement
$stmt->execute();
/* store result */
$stmt->store_result();
// Bind the result parameters
$stmt->bind_result($id,$name,$fathers_name,$mothers_name,$village,$post_office1,$gender,$date_of_brith,$thana,$district,$blood_group,$qualification,$phone,$email,$amount1,$img);

if($stmt->num_rows > 0){
    while($stmt->fetch()){
echo "<tr>
<td>".$id."</td>
<td>".$name."</td>
<td>".$fathers_name."</td>
<td>".$mothers_name."</td>
<td>".$village."</td>
<td>".$post_office1."</td>
<td>".$gender."</td>
<td>".$date_of_brith."</td>
<td>".$thana."</td>
<td>".$district."</td>
<td>".$blood_group."</td>
<td>".$qualification."</td>
<td>".$phone."</td>
<td>".$email."</td>
<td>".$amount1."</td>
<td> <img height='80px' width='100px' src='load/$img.'</td>
<td> <a href='delete_reg.php?sid=".$id."' class='btn btn-danger' onClick=\"return confirm('Are you absolutely sure you want to delete?')\">Delete</a> </td>
</tr>";
    }
    echo "</table>";
 }
?>

</section>
      <!-- /wrapper -->
    </section>