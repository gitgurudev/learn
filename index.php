<?php
$val = 30;
echo "Hello World!" . "<br>  " . $val . "<br>";
if ($val > 30) {
    echo "$val is greater";
} else {
    echo "$val is smaller <br>";
}
function yahoo (){
    echo "hello";
}
yahoo();

echo "<h1>function with parameters</h1>";

function name($first,$last)
{
    echo "hello $first $last ";
}

name("yash","dharme");

echo "<h1>function with default parameters</h1>";

function defname($first = "yahoo",$last = "Baba")
{
    echo "hello $first $last <br>";
}

defname();
defname("yash","dharme");

echo "<h1>function to canculate percentage</h1>";

function percentage($math,$eng,$sci){
    $sum = $math + $eng + $sci ;
    $cal = $sum / 300 * 100;
    echo "percentage = ";
    echo number_format((float)$cal, 2, '.', '');
}
echo percentage(59,89,89);



// $foo = "105";
// echo number_format((float)$foo, 2, '.', '');  // Outputs -> 105.00
?>