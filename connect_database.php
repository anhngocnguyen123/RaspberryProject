<?php
    session_start();
    $servername = "localhost";
    $db_user = "root";
    $db_password = "";
    $dbname = "tempDatetime";

    // Create connection
    $conn = new mysqli($servername, $db_user, $db_password, $dbname);
    $conn->query("SET NAMES 'utf8'");
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>

