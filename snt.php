<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="input">
    <input type="submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $input=$_POST["input"];
    $count=0;
    for  ($number=2;$number<=$input*$input;$number++){
        if ($input%$number==0){
            echo $number.",";
            $count++;
        }
    }
    if($count==0 && $input >1 ){
echo "không phải số nguyên tố ";
}else{
echo "là số nguyên tố ";
}
}


?>