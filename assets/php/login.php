<?php
// Connect to the database
$conn = new mysqli("localhost", "root", "", "chaotic");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get username and password from the login form
$username = isset($_POST['usr']) ? $_POST['usr'] : '';
$password = isset($_POST['pwd']) ? $_POST['pwd'] : '';

// Validate input (prevent SQL injection)
$username = $conn->real_escape_string($username);
$password = $conn->real_escape_string($password);

// Use prepared statement to avoid SQL injection
$sql = "SELECT * FROM login WHERE usr = ? AND pwd = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Successful login
    session_start();
    $_SESSION['usr'] = $username;
    echo '<script type="text/javascript">alert("Selamat Datang di Website PICKNIK");</script>';
    header("Location: ../phpfl/index2.php"); // Redirect to the dashboard after successful login
    exit();
} else {
    // Failed login
    echo '<script type="text/javascript">alert("Invalid username or password");</script>';
}

$stmt->close();
$conn->close();
?>
