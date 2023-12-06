
<?php
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    
    $conn = mysqli_connect($servername, $username, $password);
    
    if (!$conn) {
        echo "Connection Unsuccessful.<br>";
    } else {
        echo "Connection Successful.<br>";
    }

?>
