<?php

include("config/db.php");

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$course = $_POST['course'];

$query = "UPDATE students
SET
name = '$name',
email = '$email',
course = '$course'
WHERE id = '$id'";

$result = mysqli_query($conn, $query);

if ($result) {

    header("Location: index.php");

} else {

    echo "Update Failed";

}

?>