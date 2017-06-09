<?php
$server = "localhost:3306";
$userdb = "";
$passdb = "";
$dbname = "testing db";

// Create connection
$conn = new mysqli($server, $userdb, $passdb, $dbname);
// Check connection
if ($conn->connect_error) {
    echo "Connection failed: " . $conn->connect_error;
    exit;
}
?>
