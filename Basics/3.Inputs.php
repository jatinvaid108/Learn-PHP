<?php


$name = readline("Enter your name: ");
echo "Hello " . $name;

//OK Means readline or php store string if we want it to store in integer we need to do type casting right !
$age = readline("Enter age: ");
var_dump($age);


$age = (int) readline("Enter age: ");
var_dump($age);
?>

<?php


$num1 = (int)readline("Enter first number: ");
$num2 = (int)readline("Enter second number: ");
$num3 = (int)readline("Enter third number: ");

if ($num1 >= $num2 && $num1 >= $num3) {
    echo "$num1 is the largest number";
} else if ($num2 >= $num1 && $num2 >= $num3) {
    echo "$num2 is the largest number";
} else {
    echo "$num3 is the largest number";
}
echo '\n';
echo '\n';

for($i=1; $i<=10; $i++){
    echo $i . " ";
}

?>