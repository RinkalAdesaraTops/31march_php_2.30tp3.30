<?php
// +,-,*,/,%,**
$a = 29;
$b = 5;
//% - return reminder 
echo "<br>Modulus is ".$a%$b;
echo "<br>Exponent is ".$b**3; //5*5*5
//2)Assignment - short hand sortcut-- += -= *= /= %= **=
$c = 2;
$c **= 5; // $a = $a+2 --- $a+=2
echo "<br> a is $c";
// 3)increment decrement -++ --
$a = 10;
echo "<br> a is $a";

$b = $a++; //postfix +1=11
echo "<br> a is $a";
echo "<br> b is $b";

$b = ++$a;//prefix == 12
echo "<br> a is $a";
echo "<br> b is $b";

?>