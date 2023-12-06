<?php
    include "Connect.php";

    $query = "CREATE DATABASE Mydatabase";

    if(mysqli_query($conn, $query)) {
        echo "Database creation successful.<br>";
    }
    else {
        echo "Database creation error.<br>";
    }
?>