<?php

$a = 10;
$b = 5;

echo $a + $b;

echo "\n";
echo "\n";
echo "\n";

$x = 10;
$y = "10";

var_dump($x == $y);
// Output is True Because Values are same:


echo "\n";
echo "\n";
$x = 10;
$y = "10";

var_dump($x === $y);
//false
//Because:
//
//one is integer
//one is string
?>

<!--== Checks only values while === checks value and data type-->
<!--var_dump()-->
<!--Used for debugging.-->
<!--It shows data Type and values-->
