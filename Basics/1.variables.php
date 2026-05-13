<?php

$x = 5985;
var_dump($x);

$x = true;
var_dump($x);

$cars = array("Volvo","BMW","Toyota");
var_dump($cars);

echo "\n";
echo "\n";
echo "\n";

class Car {
    public $color;
    public $model;

    public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
    }

    public function message() {
        return "My car is a " . $this->color . " " . $this->model . "!";
    }
}

$myCar = new Car("red", "Volvo");
var_dump($myCar);

?>