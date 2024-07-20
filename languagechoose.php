<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quiz";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Prepare and bind the INSERT statement
$stmt = $conn->prepare("INSERT INTO language (username, language) VALUES (?, ?)");
$stmt->bind_param("ss", $uname, $language);

// Set parameters and execute
$uname = $_POST['username'];
$language = $_POST['language'];
$stmt->execute();

echo "Records inserted successfully";

// Close statement and connection
$stmt->close();
$conn->close();
?>
