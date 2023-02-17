<?php 

    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "db_genesis";

    $conn = mysqli_connect($host, $username, $password, $db);

    if (!$conn) {
        echo "Connection Failed!!";
    }

// echo "<pre>";
// print_r (connectDB());
// echo "</pre>";

?>