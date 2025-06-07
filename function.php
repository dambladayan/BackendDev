<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   /* $inlove ="true";
    $nolove ="false";
    if ($inlove && $nolove){
    echo "Gustava and comfort have no relationship but Gustava love comfort";
    }elseif($inlove && $nolove){
        echo"no relationshi";
    }else
    {
echo"Gustava and comfort are in a relationship";
   }*/
 /* $num1 =10;
  $num2=20;
  if ($num1 > $num2){
    echo $num1 . "is the max number";
  }else
  {
    echo $num2 . "is the max number";
  }*/
 /*function trianglearea($base,$height){
    return ($base * $height) /2;
  }
  echo trianglearea(5,4);*/
 /* $grade='Z';
  switch ($grade) {
    case 'A':
      echo "Excellent !";
      break;
    
    case 'B';
      echo "pass !";
      break;
      case 'C';
      echo "fair !";
      break;
      default:
      echo "invalid grade";
      break;
  }*/
  function findmax($num1 , $num2){
    switch (true) {
      case $num1 > $num2 :
        return $num1;
        case $num1 < $num2 :
          return $num2;
          default:
          return "both numbers are equal";
        }
      }
      $num1 =10;
      $num2 =20;
      echo "the maximum number is :" . findmax($num1 ,$num2);
  

    ?>
</body>
</html>