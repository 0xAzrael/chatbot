<?php
$servername = "sql108.infinityfree.com";
$username = "if0_35488325";
$password = "NidKtx0X21";
$dbname = "if0_35488325_chatbot_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
