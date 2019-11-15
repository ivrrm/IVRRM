<?php
$servername = "localhost";
$user = "root";
$passwrd = "";
$dbname = "ivrrm";

$conn = new mysqli($servername, $user, $passwrd, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>