<?php
    if(isset($_POST["login"])) {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $Database = "Mydatabase";

        $conn = mysqli_connect($servername, $username, $password, $Database);
        
        $username = $_POST["username"];
        $password = $_POST["password"];

        $query = "SELECT * FROM Mytable WHERE Username = '$username' AND Password = '$password';";
        
        $result = mysqli_query($conn, $query);
        $numrows = mysqli_num_rows($result);

        if($numrows == 1) {
            echo "<br>Log In Successful<br>";
        }
        else {
            echo "Sorry... Error in data.";
        }
    }
?>