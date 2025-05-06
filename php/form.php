<?php 
// error_reporting(0);
if(isset($_POST['save'])){
    $n1 = $_POST['no1'];
    $n2 = $_POST['no2'];
    // echo "Addition is ".($n1+$n2);
    $ans = $n1+$n2;
}
if(isset($_POST['mult'])){
    $n1 = $_POST['no1'];
    $n2 = $_POST['no2'];
    // echo "Addition is ".($n1+$n2);
    $ans = $n1*$n2;
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
    <form action="#" method="post">
        <label for="">No 1:</label>
        <input type="number" name="no1"> <br><br>
        <label for="">No 2:</label>
        <input type="number" name="no2"> <br><br>
        <input type="submit" name="save" value="Addition"> <br><br>
        <input type="submit" name="mult" value="Multiplication"> <br><br>
    </form>
    ANswer is -- <?php echo (isset($ans))?$ans:'' ?>
</body>
</html>