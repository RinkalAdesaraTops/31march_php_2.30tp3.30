<?php 
include('db.php');
 if($_POST['save']){
    $cname = $_POST['cname'];
    echo $sql = "INSERT INTO category(`id`,`cname`) values ('','$cname')";
    $res = mysqli_query($conn,$sql);
    if($res){
        header('location:category.php');
    }
}


?>