<?php

include("config/db.php");

$name = $_POST['name'];
$email = $_POST['email'];
$course = $_POST['course'];

$query = "INSERT INTO students(name, email, course)
VALUES('$name', '$email', '$course')";

$result = mysqli_query($conn, $query);

if ($result) {
    echo "Student Added Successfully";
} else {
    echo "Error";
}

?>