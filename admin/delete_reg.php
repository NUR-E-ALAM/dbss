<?php
if(isset($_GET['sid'])){
    require "database.php";
    $id = $_GET['sid'];
    $q = "select * from members where id='$id'";
    $q_r = $conn->query($q);
    if ($q_r->num_rows > 0) {
        $delQuery = "delete from members where id='$id' limit 1";
        $conn->query($delQuery);
        if ($conn->affected_rows == 1) {
            header("location:show_del_reg.php");
        }
    }
    else{
        echo "cannot delete";
    }
}
?>