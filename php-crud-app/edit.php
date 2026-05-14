<?php

include("config/db.php");

$id = $_GET['id'];

$query = "SELECT * FROM students WHERE id = '$id'";

$result = mysqli_query($conn, $query);

$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Student</title>
</head>

<body>

<h2>Edit Student</h2>

<form action="update.php" method="POST">

    <input type="hidden" name="id"
           value="<?php echo $row['id']; ?>">

    <input type="text" name="name"
           value="<?php echo $row['name']; ?>">

    <br><br>

    <input type="email" name="email"
           value="<?php echo $row['email']; ?>">

    <br><br>

    <input type="text" name="course"
           value="<?php echo $row['course']; ?>">

    <br><br>

    <button type="submit">
        Update Student
    </button>

</form>

</body>

</html>