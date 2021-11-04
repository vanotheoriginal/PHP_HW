<?php

$servername = "localhost";
$username = "root";
$password = "37r00t";
$dbname = "testdb";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

?>