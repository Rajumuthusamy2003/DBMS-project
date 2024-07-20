<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "quiz";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully"; // Corrected syntax

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all form fields are set
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {

        // Sanitize and validate form data
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        // Prepare SQL statement to insert data into database
        $stmt = $conn->prepare("INSERT INTO contactus (name, email, message) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $message);

        // Execute the prepared statement
        if ($stmt->execute()) {
            echo "User commented successfully";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    } else {
        echo "All form fields are required";
    }
}

// Close the connection outside the POST request handling block
$conn->close();
?>
