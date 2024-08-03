<?php
$host = "127.0.0.1";
$db = "hamro";
$user = "root";
$password = "";
$dsn = "mysql:host=$host;dbname=$db;";
$pdo = new PDO($dsn, $user, $password);

// Sample hardcoded username and password (replace with database validation)
// $authUsername = 'username';
// $authPassword = 'password';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Validate form data (you may want to add more validation)
    $inputUsername = $_POST['username'];
    $inputPassword = $_POST['password'];

    // Prepare and execute a query to fetch username and password from the database
    $stmt = $pdo->prepare("SELECT * FROM user WHERE username = :username");
    $stmt->bindParam(':username', $inputUsername);
    $stmt->execute();

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Check if the user exists and the password is correct
    if ($user && ($inputPassword == $user['password'])) {
        // Authentication successful, redirect to home page
        header("Location: hamrotour.html");
        exit;
    } else {
        $error_message = "Invalid username or password";
        echo $error_message;
    }
}
?>

--