<!DOCTYPE html>
<html>
<center>
<form action="zendingInfo.php">
    <label for="klas">ik zit in klas:</label>
<select>
    <?php 
    $klassen = array("8A", "8B", "8C", "8D", "8E", "9A", "9B", "9C", "9D", "9E");
    foreach ($klassen as $klas) {
     ?>
    <option><?php echo $klas ?> </option>
    <?php } ?>
 </select>
  <input type="submit" name="submit" value="verzenden">  
</form>
    </center>
</body>
</html>