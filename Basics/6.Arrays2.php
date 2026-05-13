<?php
//Multidimensional Arrays: Array inside Array
$students = [
    ["Jatin", 20],
    ["Rahul", 21]
];

echo $students[0][0];

?>


<?php

$names = [];

for($i = 0; $i < 3; $i++){

    $name = readline("Enter 3 name: ");

    $names[] = $name;

}
print_r($names);

?>


<?php

$numbers = [];

$size = (int) readline("How many numbers do you want to enter? ");

for ($i = 0; $i < $size; $i++) {

    $input = (int) readline("Enter number: ");

    $numbers[] = $input;
}

echo "\nArray Elements are:\n";

for ($i = 0; $i < count($numbers); $i++) {

    echo $numbers[$i];
    echo "\n";
}

?>

1. Arrays store multiple values in single variable.

2. Indexed arrays use numeric indexes starting from 0.

3. Associative arrays use key => value pairs.

4. foreach loop is best for arrays.

5. print_r() prints complete array.

6. count() counts array elements.

7. array_push() adds element.

8. array_pop() removes last element.

9. implode() converts array to string.

10. explode() converts string to array.