<?php
// Database connection configuration
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'practicals';

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// checking in the database 
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

// table selection 
$sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
    // User credentials are correct
    $_SESSION['username'] = $username;
    header('Location: ../index.html');
} else {
    // Invalid credentials
    echo "Invalid username or password.";
}

$_SESSION['username'] = $username;

mysqli_close($conn);

?>