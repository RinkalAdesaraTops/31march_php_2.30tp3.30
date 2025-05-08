<?php
//Warning hide
if(isset($_POST['submit'])){
    error_reporting(0);
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $total = $a + $b + $c;
    $avg = $total / 3;
    echo "Percentage is " . $avg . "%<br>";
    if($avg>=80){
        echo "Grade A+<br>";
    }
    else if($avg>=70 && $avg<80){
        echo "Grade A<br>";
    }
    else if($avg>=60 && $avg<70){
        echo "Grade B<br>";
    }
    else if($avg>=50 && $avg<60){
        echo "Grade C<br>";
    }
    else if($avg>=40 && $avg<50){
        echo "Grade D<br>";
    }
    else{
        echo "Fail<br>";

    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="#" name="abc" method="post">
       Enter M1:
        <input type="text" name="a" placeholder="Enter Mark1" required>
        <br><br>

        Enter M2:
        <input type="text" name="b" placeholder="Enter Mark2" required> <br><br>
        Enter M3:
        <input type="text" name="c" placeholder="Enter Mark3" required> <br><br>
        <input type="submit" value="Submit" name="submit">

    </form>
</body>
</html>