<?php
// compares values entered in login page form with mySQL database, and then directs either to protected page or to a failure page

$email = trim($_POST['email']);
$pwd = trim($_POST['password']);

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
else{
    echo "succesfful";
}

// if $fn and $pw match a record, then display page, else display failure page
$query = "SELECT email,password FROM signup WHERE (email = '$email' AND password = '$pwd')";
$result = $conn->query($query);

if ($result->num_rows >0) {
    header("Location: languagechoose.html");
    exit();
} else {
    echo 'Sorry, this login is invalid';
}

// Close connection
$conn->close();
?>
