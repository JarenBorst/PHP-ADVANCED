<!DOCTYPE html>
<html>


<?php

echo "voornaam is:".$_POST["voornaam"]; 
echo "<br>";
echo "achternaam is:".$_POST["achternaam"];
echo "<br>";
echo "klas is:".$_POST["klass"];
echo "<br>";
echo "leeftijd is:".$_POST["leeftijd"];
echo "<br>";
echo "adres is:".$_POST["adress"];
echo "<br>";
echo "plaatsnaam is:".$_POST["plaatsnaam"];
echo "<br>";
echo "favoriete muziek band is:".$_POST["x"];
echo "<br>";
echo "geslacht is:".$_POST["geslacht"];
echo "<br>";
?>
<style>
    body {
        background-color: <?php echo $_POST["color"];?>;
    }
</style>




</body>
</html>