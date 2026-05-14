<?php

$host = "localhost";
$username = "root";
$password = "root";
$database = "php_crud";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

?>