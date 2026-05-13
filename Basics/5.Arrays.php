<?php
// Normal Index array

$names = ["Jatin", "Rahul", "Aman"];

for ($i = 0; $i < count($names); $i++) {

    echo $names[$i];
    echo "\n";

}

?>

<?php
// Associative Arrays : Stores Key Values

$user = [
    "name" => "Jatin",
    "age" => 20,
    "city" => "Banur"
];

echo $user["name"];

echo "\n";
echo "\n";

//Laravel and APIs return lots of data like this.
//
//$user = [
//    "id" => 1,
//    "email" => "test@gmail.com"
//];

?>


<?php
//Loop Associative Arrays
$user = [
    "name" => "Jatin",
    "age" => 20
];

foreach($user as $key => $value){

    echo $key . " : " . $value;
    echo "<br>";

}

?>
