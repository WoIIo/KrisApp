<?php
    session_start();
    $server_name = "localhost";
    $server_user = "root";
    $server_password = "wolfroels";
    $db_name = "krisdb";
    $conn = new mysqli($server_name, $server_user, $server_password, $db_name);
    if($conn -> connect_error){
        die("connection failed: " . $conn -> connect_error);
    }
?>
