<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
trait message1{
    public function msg1(){
        echo ' OOP is fun ';
    }
}
trait message2{
    public function msg2(){
        echo ' OOP is hhhhh ';
    }
}

class Welcome{
    use message1;
}
class Welcome2{
    use message1 , message2;
    
}
$obj=new Welcome();
$obj->msg1();
echo "</br>";

$obj2=new Welcome2();
$obj2->msg1();
$obj2->msg2();
    ?>
</body>
</html>