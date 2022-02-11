<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

function addNumbers(int $a, int $b, int $c) {
  return $a + $b + $c;
}
echo "Als ik de getallen 4, 2 en 9 bij elkaar optel, is de uitkomst ";
echo addNumbers(4, 2, 9,); 

echo "<br>";

echo "Als ik de getallen 1, 2 en 3 bij elkaar otptel, is deuitkomst ";
echo addNumbers(1, 2, 3,);

echo "<br>";

echo "als ik de getallen 40, 28 en 91 bi elkaar optel, is de uitkomst ";
echo addNumbers(40, 28, 91);

?>


</body>
</html>