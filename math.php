<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
        
    <form action ="math.php" method ="post">
        <h1>looking for maximum</h1>
        <p> plase enter 2 name for computing</p>
        <label for ="num3"> number3</labele>
        <input type="number" name="num3">
        <br> <br>
        <labele for="num4">number4</labele>
        <input type="number" name="num4">
        <br> <br>
        <input type="submit">



    
    </form>
    <?php
    $thirdnumber=$_POST["num3"];
    $forthnumber=$_POST["num4"];
    echo " the maximum of $thirdnumber and $forthnumber is" .max($thirdnumber,$forthnumber);
    ?>

</body>
</html>