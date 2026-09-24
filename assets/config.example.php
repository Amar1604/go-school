<?php
    // Database Configuration Template
    // Copy this file to 'config.php' or update 'config.php' with your database credentials
    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "_sms";
    
    $conn = mysqli_connect($server, $user, $password, $db);

    if (!$conn) {
        header('Location: ../errors/error.html');
        exit();
    }
?>
