<?php 
include('db.php');
 if($_POST['save']){
    $cname = $_POST['cname'];
    $cid = $_POST['cid'];
    $sql='';
    if($cid!=''){
        //update
        $sql ="UPDATE category set `cname`='$cname' where id=".$cid;
    } else {
        //insert
        $sql = "INSERT INTO category(`id`,`cname`) values ('','$cname')";
    }
    $res = mysqli_query($conn,$sql);
    if($res){
        header('location:category.php');
    }
}


?>