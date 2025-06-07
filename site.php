<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action ="site.php" method ="get">
        <h1> A basic calculator</h1>
        <p> plase enter 2 number for computing</p>
        <labele for="num1">number1</labele>
        <input type="number" name="num1">
        <br> <br>
        <labele for ="num2">number2</labele>
        <input type="number" name="num2">
        <br> <br>
        <input type="submit">


    </form>
    <?php
    $firstnumber=$_GET["num1"];
    $secondnumber=$_GET["num2"];
    echo " the answer of $firstnumber and secondnumber is";
    echo $firstnumber*$secondnumber;


    ?>
</body>
</html>