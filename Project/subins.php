<?php 
include('db.php');
 if($_POST['save']){
    $sname = $_POST['sname'];
    $sid = $_POST['sid'];
    $cid = $_POST['cid'];
    $sql='';
    if($sid!=''){
        //update
        $sql ="UPDATE category set `cname`='$cname' where id=".$cid;
    } else {
        //insert
        $sql = "INSERT INTO subcategory(`id`,`sname`,`cid`) values ('','$sname',$cid)";
    }
    $res = mysqli_query($conn,$sql);
    if($res){
        header('location:subcategory.php');
    }
}


?>