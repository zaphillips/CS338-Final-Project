<?php
    $servername = "apollo.anselm.edu";
    $username = "team5";
    $password = "team5pass";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password);
    
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    alert("Connected successfully");

    //Close Connection
    $conn->close();
?>