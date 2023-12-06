<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    if(isset($_POST["signup"])) {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $Database = "Mydatabase";

        $conn = mysqli_connect($servername, $username, $password, $Database);
    }
?>

<center>
<h2>Register Here</h2>
<form action="Redirect.php" method="post">
    <label for="email">Email</label>
    <input type="email" name="email" id="email"><br><br>
    <label for="username">Username</label>
    <input type="text" name="username" id="username"><br><br>
    <label for="password">Password</label>
    <input type="password" name="password" id="password"><br><br>
    <button name="register">Register</button>
</form>
</center>
</body>
</html>