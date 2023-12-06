<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $Database = "Mydatabase";

    $conn = mysqli_connect($servername, $username, $password, $Database);  

    if (!$conn) {
        echo "Connection Unsuccessful.<br>";
    } else {
        echo "Connection Successful.<br>";
    }

    $query = "CREATE TABLE Mytable (
        Id INT(10) PRIMARY KEY,
        Email VARCHAR(40),
        Username VARCHAR(30),
        Password VARCHAR(30)
    );";

    if(mysqli_query($conn, $query)) {
        echo "Table created successfully.<br>";
    }
    else {
        echo "Table creation error.<br>";
    }

?>