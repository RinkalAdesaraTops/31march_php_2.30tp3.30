<?php 
include('db.php');
$id = $_GET['id'];
if($id!=''){
    $sql = "DELETE from category where id=".$id;
    $res = mysqli_query($conn,$sql);
    if($res){
        header('location:category.php');
    }
} else {
    die('Plz enter id you want to delete');
}
?>