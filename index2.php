<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="" method="post">
    <h2 style="color: #7d0000">simple caculator</h2>
    enter a <input type="text" name="a">
    <select name="operation" id="">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    enter b <input type="text" name="b">
    <input type="submit">
</form>
<?php
class caculator {
    public function calculate($num1,$num2){
        if ($num1>= PHP_INT_MAX && $num2>=PHP_INT_MAX){
            return "too big";
        }else{
            switch ($_REQUEST["operation"]){
                case "+":return $num1+$num2;
                break;
                case "-":return $num1-$num2;
                break;
                case "*":return $num1*$num2;
                break;
                case "/":return $num1/$num2;
            }
        }
    }
}
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $numberone=$_POST["a"];
    $numbertwo=$_POST["b"];
    try {
        $cal=new caculator();
        $result=$cal->calculate($numberone,$numbertwo);
        echo $result;
    }catch (Exception $exception){
        $_REQUEST['result']->getmessage();
    }
}
?>
</body>
</html>