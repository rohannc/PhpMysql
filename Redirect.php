<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $Database = "Mydatabase";
    
    $conn = mysqli_connect($servername, $username, $password, $Database);

    if(isset($_POST["register"])) {
        $email = $_POST["email"];
        $username = $_POST["username"];
        $password = $_POST["password"];

        $query = "INSERT INTO Mytable (Email, Username, Password) VALUES ('$email', '$username', '$password');";

        mysqli_query($conn, $query);

    }
?>
    <form action="Index.php" method="post">
        <button>Go back to Homepage</button>
    </form>
</body>
</html>