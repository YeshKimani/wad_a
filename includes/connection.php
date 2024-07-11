
<?php
$servername = "localhost"; // Change if your server is different
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "sentinel";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
