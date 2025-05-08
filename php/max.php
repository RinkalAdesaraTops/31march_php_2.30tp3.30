<?php
//eLSE IF LADDER
//Max from 2 numbers
//Max from 3 numbers
//Max from 4 numbers - lab task
if(isset($_POST['submit'])){
   $a = $_POST['a'];
   $b = $_POST['b'];
   $c = $_POST['c'];
   if($a>$b && $a>$c){
       echo "<br>A is max";
   } else if($b>$c){
        echo "<br>B is max";    
   } else {
        echo "<br>C is max";

   }
    // if($a > $b){
    //     echo "A is max";
    // } else {
    //     echo "B is max";
    // }
}
//Max from 3 numbers


?>