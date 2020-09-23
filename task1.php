<!DOCTYPE html>
<html>
<head>
    <title>Platzhalter</title>
</head>
<body>
<form name="formular" method="post" action="task1.php">
    <h1>Enter your Value and Then Program will return it!</h1>
    <label for="text">Your Value:</label>
    <input id="value" name="value" maxlength="100"></input>
    <button type ="submit" name ="action">Enter</button>
    <br><br>
</form>
<?php 
$data = $_POST['value'];
echo "Solution:   ".$data;
$save = fopen ("save.txt", "a");
fwrite ($save, $data."\n");
fclose ($save);
?>
</body>
</html>
