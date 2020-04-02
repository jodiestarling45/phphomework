<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="" method="post">
    <h1 style="color: #7d0000">product discount calculator</h1>
    <h5>product description :</h5><input type="text" name="product"><br>
    <h5>list price</h5><input type="text" name="listprice"><br>
    <h5>discount percent</h5><input type="text" name="discount"><br>
    <input type="submit" value="calculate the discount">
</form>
<?php
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        $product=$_POST["product"];
        $listprice=$_POST["listprice"];
        $discount=$_POST["discount"];
        $disamount=$listprice*$discount*0.1;
        echo $disamount;"<br>";
$disprice=$disamount*$discount;
echo $disprice;
}



?>
</body>
</html>