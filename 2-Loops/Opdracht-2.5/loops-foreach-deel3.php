<!DOCTYPE html>
<html>

<?php 

$student  = array(
    "voornaam"    => "Jan",
    "achternaam"  => "Janssen",
    "klas"        => "9A",
    "Leeftijd"    => 17,
    "Woonplaats"  => "Amstelveen"
  );

foreach($student as $keys => $value){
    echo"$keys => $value";
    echo"<br>";
}

?>

</body>
</html>