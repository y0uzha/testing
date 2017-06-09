<?php
$server = "localhost:33";
$userdb = "";
$passdb = "";
$dbname = "testing_db";

// Create connection
$conn = new mysqli($server, $userdb, $passdb, $dbname);
// Check connection
if ($conn->connect_error) {
    echo "Connection failed: " . $conn->connect_error;
    exit;
}
?>
