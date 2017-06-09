<?php
$server = "localhost:3306";
$userdb = "";
$passdb = "";
$dbname = "cb_ristek";

// Create connection
$conn = new mysqli($server, $userdb, $passdb, $dbname);
// Check connection
if ($conn->connect_error) {
    echo "Connection failed: " . $conn->connect_error;
    exit;
}
?>
