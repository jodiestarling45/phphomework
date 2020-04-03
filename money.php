<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="input">
    <select name="section1">
        <option value="23000">vnd</option>
        <option value="1">usd</option>
    </select>
    <select name="section2" id="">
        <option value="1">usd</option>
        <option value="23000">vnd</option>
    </select>
    <input type="submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $input=$_POST["input"];
    $section1=$_POST["section1"];
    $section2=$_POST["section2"];
    $result=$input*$section1/$section2;
    echo $result;
}


?>
</body>
</html>