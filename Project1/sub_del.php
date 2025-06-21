<?php 
include('db.php');
$id = $_GET['id'];
if($id!=''){
    $sql = "DELETE from subcategory where id=".$id;
    $res = mysqli_query($conn,$sql);
    if($res){
        header('location:subcategory.php');
    }
} else {
    die('Plz enter id you want to delete');
}
?>