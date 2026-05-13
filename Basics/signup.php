<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Form</title>

    <style>

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body{
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #f2f5f9;
        }

        .container{
            width: 400px;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        h1{
            text-align: center;
            margin-bottom: 25px;
            color: #333;
        }

        .input-group{
            margin-bottom: 18px;
        }

        label{
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
            color: #444;
        }

        input,
        select,
        textarea{
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 14px;
        }

        textarea{
            resize: none;
            height: 80px;
        }

        .gender{
            display: flex;
            gap: 15px;
            margin-top: 8px;
        }

        .skills{
            margin-top: 8px;
        }

        .skills label{
            font-weight: normal;
            display: inline-block;
            margin-right: 12px;
        }

        button{
            width: 100%;
            padding: 12px;
            border: none;
            background: #2563eb;
            color: white;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover{
            background: #1d4ed8;
        }

        .output{
            margin-top: 25px;
            padding: 15px;
            background: #f4f4f4;
            border-radius: 8px;
        }

    </style>
</head>
<body>

<div class="container">

    <h1>Signup Form</h1>

    <form method="POST">

        <div class="input-group">
            <label>Full Name</label>
            <input type="text" name="fullname" placeholder="Enter full name">
        </div>

        <div class="input-group">
            <label>Email</label>
            <input type="email" name="email" placeholder="Enter email">
        </div>

        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password" placeholder="Enter password">
        </div>

        <div class="input-group">
            <label>Age</label>
            <input type="number" name="age" placeholder="Enter age">
        </div>

        <div class="input-group">
            <label>Gender</label>

            <div class="gender">
                <label>
                    <input type="radio" name="gender" value="Male"> Male
                </label>

                <label>
                    <input type="radio" name="gender" value="Female"> Female
                </label>
            </div>
        </div>

        <div class="input-group">
            <label>Skills</label>

            <div class="skills">
                <label>
                    <input type="checkbox" name="skills[]" value="PHP"> PHP
                </label>

                <label>
                    <input type="checkbox" name="skills[]" value="Java"> Java
                </label>

                <label>
                    <input type="checkbox" name="skills[]" value="Python"> Python
                </label>
            </div>
        </div>

        <div class="input-group">
            <label>City</label>

            <select name="city">
                <option value="">Select City</option>
                <option>Banur</option>
                <option>Chandigarh</option>
                <option>Mohali</option>
            </select>
        </div>

        <div class="input-group">
            <label>About Yourself</label>
            <textarea name="about"></textarea>
        </div>

        <button type="submit">Create Account</button>

    </form>


    <?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        echo "<div class='output'>";

        echo "<h3>User Data</h3>";

        echo "<p><strong>Name:</strong> " . htmlspecialchars($_POST['fullname']) . "</p>";

        echo "<p><strong>Email:</strong> " . htmlspecialchars($_POST['email']) . "</p>";

        echo "<p><strong>Age:</strong> " . htmlspecialchars($_POST['age']) . "</p>";

        echo "<p><strong>Gender:</strong> " . htmlspecialchars($_POST['gender']) . "</p>";

        echo "<p><strong>City:</strong> " . htmlspecialchars($_POST['city']) . "</p>";

        echo "<p><strong>About:</strong> " . htmlspecialchars($_POST['about']) . "</p>";


        if(isset($_POST['skills'])){

            echo "<p><strong>Skills:</strong> ";

            foreach($_POST['skills'] as $skill){
                echo htmlspecialchars($skill) . " ";
            }

            echo "</p>";
        }

        echo "</div>";
    }

    ?>

</div>

</body>
</html>

