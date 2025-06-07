<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example</title>
</head>
<body>
    <form action ="test.php" method ="post">
        <h1> my form</h1>
        <p> plase enter 2 name for computing</p>
        <label for ="name1"> name1</labele>
        <input type="text" name="name1">
        <br> <br>
        <labele for="name2">name2</labele>
        <input type="text" name="name2">
        <br> <br>
        <input type="submit">


    </form>
    <?php
    $firstname=$_POST["name1"];
    $secondname=$_POST["name2"];
    echo "hello my name is ". strtoupper ($firstname) .strtolower ($secondname )." <br>" ;
    echo strlen($firstname)."<br>";
    echo "this will give the last letter in first name"." ".$firstname[5];
    
   $boyname ="morata";
    $girlname="christel";
    $companyname="creative";
    // the dot (full spot) is for concatination which is for joining
    echo "there was a boy name " . $boyname . "who met a fair girl <br>";
    echo "At $companyname , her name was" . $girlname . "<br>";
    echo  "At" . $companyname . "they spent the whole day mopping the company<br>";
    ?>
</body>
</html>
