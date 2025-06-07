<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p> the sum of 3 and 5 can be seen below </p>

    <form action="index.php" method ="get">
        <hi> A basic calculator</h1>
        <p> plase enter 2 number for computing</p>
        <labele for="num1"> number1</lable>
        <input type="number" name="num1">
        <br><br>
        <labele for="num2"> number2</labele>
        <input type="number" name="num2">
        <br> <br>
        <input type="submit">
</form>
    <?php
    $firstnumber = $_GET["num1"];
    $secondnumber = $_GET["num2"];
    echo " the answer of $firstnumber and $secondnumber is";
    echo $firstnumber +$secondnumber;

    $usersage ="21";
    $name ="philemon";
    echo "<h1> there was a man named $name </h1>" ; 
    echo "<p> He is $usersage old </p>";
    echo "He really liked Louris <br>";
    echo " but phil didnt like being 19yrs <br>";


    echo 3.6 +1.4;
    echo "<br>";
    echo 3.6 *1.4;
    echo "<br>";
    echo 3.6 / 1.4;
    echo "<br>";
    echo 3.6 - 1.4;
    echo "<br>";
    echo (2.3) *3;
    echo "<br>";
    echo pow(3,2);
    echo "<br>";
    echo 10 % 4;
    echo "<br>";
    echo abs(-78);
    echo"<br>";
    echo max (13, 10);
    echo "<br>";
    echo ceil(56.984);
    echo "<br>";
    echo floor(56.984);
    echo "<br>";

    //



 ?>
</body>
</html>