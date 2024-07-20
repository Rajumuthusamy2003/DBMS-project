<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="quiz";

// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all form fields are set
    if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['password'])) {
        
        // Sanitize and validate form data
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        // Hash the password for security
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        // Prepare SQL statement to insert data into database
        $stmt = $conn->prepare("INSERT INTO signup (fname, lname, email, password) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $fname, $lname, $email, $password);
        // Execute the prepared statement
        if ($stmt->execute()) {
            echo "User registered successfully";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the statement and connection
        $stmt->close();
        $conn->close();
    } else {
        echo "All form fields are required";
    }
} else {
    echo "Form not submitted";
}
?>
