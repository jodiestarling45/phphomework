<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="" method="post">
    <h2 style="color: #00bf00">future value calculator</h2><br>
    <h6>Investment Amount:</h6><input type="text" name="invest"><br>
    <h6>Yearly Interest Rate:</h6><input type="text" name="inrate"><br>
    <h6>Number of Years:</h6><input type="text" name="numofyear"><br>
    <input type="submit" value="calculate"><br>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $invest=$_POST["invest"];
    $inrate=$_POST["inrate"];
    $year=$_POST["numofyear"];
    $futurevalue=($invest+($invest*$inrate))*$year;
    echo $futurevalue;
}


?>
</body>
</html>