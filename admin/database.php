<?php
$conn = new mysqli("localhost","root","","dbss") or die("Connection or database Error!!");
//echo "<h1>Error number: ".$conn->connect_errno."</h1>";
if ($conn->connect_errno) {
printf("<h3>Unable to connect to the database:</h3><h2> %s</h2>",
$conn->connect_error);
exit($conn->connect_errno);
}
$conn->set_charset('utf8');
// $conn = new mysqli("localhost","root","","php_project") ;
// $conn->set_charset("utf-8");
?>