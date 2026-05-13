<?php

function student($name, $age){

    echo $name . " is " . $age . " years old";

}

student("Jatin", 20);

?>

<?php
function isArmstrong($num)
{
    $ogNum = $num;
    $sum = 0;

    $digits = strlen((string)$num);

    while ($num > 0) {

        $lastDigit = $num % 10;

        $sum = $sum + ($lastDigit ** $digits);

        $num = (int)($num / 10);
    }

    if ($sum == $ogNum) {
        return true;
    } else {
        return false;
    }
}

$input = (int) readline("Enter the Number: ");

if (isArmstrong($input)) {
    echo "$input is Armstrong";
} else {
    echo "$input is not Armstrong";
}
?>

<!--C++ , Java are complied language constantly shows error while writing code like in Compile time-->
<!--This is not the case with PHP It is a interpreted/executed script-->
