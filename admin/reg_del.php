<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" >

    
</head>
<body>

<div class="st">
<h1 class="u">Economices News</h1>
    <form class="form" method="post" enctype="multipart/form-data">
    
    <p>title</p>
        <input type="text" class="form-control" name="title">
        <p>details </p>
       
        <input type="text" class="form-control" name="det">
        <p>img</p>
        <input type="file" class="form-control" name="img">
        
       
        <p><input type="submit" name="sub" class="btn btn-primary" value="add"></p>
    </form>
    </div>
</body>
</html>
<?php

require "database.php";
if (isset($_POST['sub'])){
    move_uploaded_file($_FILES['img']['tmp_name'],"load/".$_FILES['img']['name']);
	$title =$_POST['title'];
	$det =$_POST['det'];
	$img =$_FILES['img']['name'];
	
	
$insertQuery1 = "insert into economics values(NULL,'$title','$det','$img')";
// $insertQuery2 ="insert into ariticls values(NULL,'$ti','$de','$img')";

 echo $insertQuery1;
 $conn->query($insertQuery1); 
//  $conn->query($insertQuery2); 

//echo $insertQ;
//$conn->query($insertQ);

}


?>