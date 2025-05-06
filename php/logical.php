<?php
//relational - <,>,<=,>=,==,!=,===,!==
$a = 350;
$b = 4;
echo "<br> 'a > b' is ";
echo $a>$b; //true - 1 false - ''
echo "<br> 'a < b' is ";
echo $a<$b;
echo "<br> a >= b is ";
echo $a>=$b;
echo "<br> a <= b is ";
echo $a<=$b;
echo "<br> a == b is ";
echo $a==$b;
echo "<br> a === b is ";
echo $a===$b;
//logical -- && || !
echo "<br> '! a > b' is ";
echo !($a>$b);
$c = 45;
echo "<br> a>b & a>c";
echo ($a>$b) && ($a>$c);
echo "<br> a>b or a>c";
echo ($a>$b) || ($a>$c);
// ternary ?: (condition)?true block: false block
$age = 13;
echo ($age>=18)?"<br>Eligible 4 vote":"<br> Not Eligible 4 vote";
if($age>=18){
    echo "Eligible";
} else {
    echo "Not Eligible";

}
$no = 45; 
//even or odd
echo ($no%2==0)?"Even no":"Odd No";
//max from 2 value - a&b 
echo ($a>$b)?" A is max":"B is max";

?>