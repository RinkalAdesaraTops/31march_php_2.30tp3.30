<?php 
include('db.php');
$id = $_GET['id'];
$sid = $_GET['sid'];

if($id!=''){
    $sql = "DELETE from category where id=".$id;
    $res = mysqli_query($conn,$sql);
    if($res){
        header('location:category.php');
    }
} 
else if($sid != ''){
    $sql = "DELETE from subcategory where id=".$sid;
    $res = mysqli_query($conn,$sql);
    if($res){
        header('location:subcategory.php');
    }
}
else {
    die('Plz enter id you want to delete');
}
?>