<?php

include("config/db.php");

$id = $_GET['id'];

$query = "DELETE FROM students WHERE id = '$id'";

$result = mysqli_query($conn, $query);

if ($result) {

    header("Location: index.php");

} else {

    echo "Delete Failed";

}

?>