<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
<form name="invoer" action="advanced-2.php" method="post">
        <label for="textColor">Tekst Kleur</label>
        <select name="textColor">
            <option>Select color...</option>
            <br/>
            <option style="color: red;">Red</option>
            <option style="color: blue;">Blue</option>
            <option style="color: green;">Green</option>
            <option style="color: black;">Black</option>
            <option style="color: brown;">Brown</option>
        </select><br/><br/>
        <label for="backColor">Achtergrond Kleur</label>
        <select name="backColor">
            <br/>
            <br/>
            <option>Select color...</option>
            <br/>
            <option style="color: red;">Red</option>
            <option style="color: blue;">Blue</option>
            <option style="color: green;">Green</option>
            <option style="color: black;">Black</option>
            <option style="color: brown;">Brown</option>
        </select><br/><br/>
        <label for="tabelRand">Tabelranddikte (px):</label>
        <input type="text" name="tabelRand"><br/><br/>
        <label for="celPad">Cell-padding (px):</label>
        <input type="text" name="celPad"><br/><br/>
        <input type="submit" name="submit" value="verstuur">
</form>
</center>
</body>
</html>