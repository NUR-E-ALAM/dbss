<section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Registration Form</h3>
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <h4 class="mb"><i class="fa fa-angle-right"></i> Form Elements</h4>
              <form class="form-horizontal style-form" method="post" enctype="multipart/form-data">
            
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Name :</label>
                  <div class="col-sm-10">
                    <input type="text" name="name"  class="form-control" placeholder="Name" required="" >
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Father's Name :</label>
                  <div class="col-sm-10">
                    <input type="text" name="fname"  class="form-control" placeholder="Father's Name" required="" >
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Mother's Name :</label>
                  <div class="col-sm-10">
                    <input type="text" name="mname"  class="form-control" placeholder="Mother's Name" required="" >
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Village :</label>
                  <div class="col-sm-4">
                    <input type="text" name="village"  class="form-control" placeholder="Village" required="" >
                  </div>
                  <label class="col-sm-1 col-sm-1 control-label">Thana :</label>
                  <div class="col-sm-5">
                    <input type="text" name="thana"  class="form-control" placeholder="Thana" required="" >
                  </div>

                  
                </div>
                <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Post Office :</label>
                  <div class="col-sm-4">
                    <input type="text" name="post"  class="form-control" placeholder="Post Office" required="" >
                  </div>
                  <label class="col-sm-1 col-sm-1 control-label">District :</label>
                  <div class="col-sm-5">
                    <input type="text" name="district"  class="form-control" placeholder="District" required="" >
                  </div>
                </div>

                <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Blood Group :</label>
                  <div class="col-sm-4">
                    <input type="text" name="blood"  class="form-control" placeholder="Blood Group" required="" >
                  </div>
                  <label class="col-sm-2 col-sm-2 control-label">Gender :</label>
                  <div class="col-sm-1">
                  Man
</div>
<div class="col-sm-1">
<input type ="radio" name ="gander"  class="form-control" value ="Man" required="" >
                  </div>
                  <div class="col-sm-1">Woman</div>
                  <div class="col-sm-1">
                  <input type ="radio" name ="gander"  class="form-control" value ="Woman" required="" >
</div>

</div>
<div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Qualification :</label>
                  <div class="col-sm-4">
                    <input type="text" name="qly"  class="form-control" placeholder="Qualification" required="" >
                  </div>
                  <label class="col-sm-1 col-sm-1 control-label">Phone :</label>
                  <div class="col-sm-5">
                    <input type="text" name="number"  class="form-control" placeholder="Phone Number" required="" >
                  </div>

                  
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Email Address :</label>
                  <div class="col-sm-4">
                    <input type="text" name="email"  class="form-control" placeholder="Email Address" required="" >
                  </div>
                  <label class="col-sm-1 col-sm-1 control-label">Amount :</label>
                  <div class="col-sm-5">
                    <input type="text" name="amount"  class="form-control" placeholder="Amount" required="" >
                  </div>

                  
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Picture :</label>
                  <div class="col-sm-4">
                  <input type="file" name="img"  class="form-control" required="" >
                  </div>
                  <label class="col-sm-1 col-sm-1 control-label">Birth :</label>
                  <div class="col-sm-5">
                    <input type="date" name="dob"  class="date form_datetime-component form-control" placeholder="Amount" required="" >
                  </div>

                  
                </div>
                
                <input type="submit" class="form-control btn btn-primary" name="sub" value="Submit">
                <input type="reset" class="form-control btn btn-info" value="Clear">
                  </div>
                  </form>
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

               
        
              </div>
            </div>
          </div>
        </div>
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>