<!DOCTYPE html>
<html>

<head>
    <title>Simple Signup Form</title>
</head>

<body>

<h2>Signup Form</h2>

<form method="POST">

    <label>Name:</label>
    <input type="text" name="name">

    <br><br>

    <label>Email:</label>
    <input type="email" name="email">

    <br><br>

    <label>Password:</label>
    <input type="password" name="password">

    <br><br>

    <label>Age:</label>
    <input type="number" name="age">

    <br><br>

    <label>Gender:</label>

    <input type="radio" name="gender" value="Male"> Male
    <input type="radio" name="gender" value="Female"> Female

    <br><br>

    <label>Skills:</label>

    <input type="checkbox" name="skills[]" value="PHP"> PHP
    <input type="checkbox" name="skills[]" value="Java"> Java
    <input type="checkbox" name="skills[]" value="Python"> Python

    <br><br>

    <label>City:</label>

    <select name="city">

        <option>Banur</option>
        <option>Mohali</option>
        <option>Chandigarh</option>

    </select>

    <br><br>

    <label>About:</label>

    <br>

    <textarea name="about"></textarea>

    <br><br>

    <button type="submit">Submit</button>

</form>



<?php

if(isset($_POST["name"])){

    echo "<h3>User Data</h3>";

    echo "Name: " . $_POST["name"];
    echo "<br>";

    echo "Email: " . $_POST["email"];
    echo "<br>";

    echo "Age: " . $_POST["age"];
    echo "<br>";

    echo "Gender: " . $_POST["gender"];
    echo "<br>";

    echo "City: " . $_POST["city"];
    echo "<br>";

    echo "About: " . $_POST["about"];
    echo "<br>";

    if(isset($_POST["skills"])){

        echo "Skills: ";

        foreach($_POST["skills"] as $skill){

            echo $skill . " ";

        }
    }
}

?>

</body>
</html>