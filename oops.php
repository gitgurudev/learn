<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php
class calculation{
    public $a,$b,$c;
    function sum(){
        $this->c = $this->a + $this->b;
        return $this->c;
    }
    
    function sub(){
        $this->c = $this->a - $this->b;
        return $this->c;
    }

}
$obj = new calculation();
$obj->a = 10;
$obj->b = 10;
echo "sum of obj is : " . $obj-> sum() , "\n";
echo "<br>";
$obj1 = new calculation();
$obj1->a = 20;
$obj1->b = 10;
echo  "sum of obj1 is : " . $obj1->sub();
?>

</body>
</html>