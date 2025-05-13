<?php
if(isset($_POST['submit'])){
    $a = $_POST['no1'];
    $b = $_POST['no2'];
    $choice = $_POST['ch'];
    switch($choice){
        case '+': $c = $a+$b;
                echo "Addition of $a and $b is: $c";
                break;  
        case 2: $c = $a-$b;
                echo "Minus of $a and $b is: $c";
                break;
        case 3: $c = $a*$b;
                echo "Multiply of $a and $b is: $c";
                break;
        case 4: $c = $a/$b;
                echo "Division of $a and $b is: $c";
                break;
        default: echo "Invalid choice"; break;
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
    <form action="#" method="post" name="frm">
        No1:<input type="number" name="no1" id=""><br><br>
        No2:<input type="number" name="no2" id=""><br><br>
        <label for="">1.Addition</label><br>
        <label for="">2.Minus</label><br>
        <label for="">3.Multiply</label><br>
        <label for="">4.Division</label><br>
        <label for="">Enter your choice:</label>
        <input type="text" name="ch" id=""><br><br>
        <input type="submit" value="Save" name="submit">
    </form>
</body>
</html>