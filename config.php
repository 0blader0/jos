<?php
$servername = "localhost";
$username = "jossystem";
$password = "jakubjeborec";
$dbname = "jossystem";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>