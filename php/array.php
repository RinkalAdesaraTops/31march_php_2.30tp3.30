<?php
//indexed array
$arr = array(10,20,30,40);
// echo $arr[0];
foreach($arr as $value){
    echo "<br> $value";
}
//array length
$len = count($arr);
echo "<br>Length of array is: $len";
array_push($arr, 50); //last position value add
array_pop($arr); //last position data delete
array_unshift($arr,55);
array_unshift($arr, 30);
array_unshift($arr,25);
echo '<pre>';
// var_dump($arr);
print_r($arr);
echo '</pre>';
array_shift($arr); 
echo '<pre>';
// var_dump($arr);
print_r($arr);
echo '</pre>';
//positionwise data add or remove
array_splice($arr,2,0,[67,77,78]);
echo '<pre>';
// var_dump($arr);
print_r($arr);
echo '</pre>';
//Associative array
$arr2 = array(
    "name"=>"John",
    "age"=>30,
    "city"=>"New York");

// echo "Your name is ".$arr2['name'];
foreach($arr2 as $r=>$s){
    echo "<br> $r ---- $s";
}
?>