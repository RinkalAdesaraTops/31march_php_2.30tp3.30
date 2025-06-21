<?php 
$db = "31march_php_db";
$username="root";
$pwd ="";
$host="localhost";
$conn =new mysqli($host,$username,$pwd,$db);
if($conn->connect_error){
    die("Connection error ".$conn->connect_error);
}
?>