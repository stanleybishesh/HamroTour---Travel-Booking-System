<?php
    // Database connection parameters
    $host="127.0.0.1";
    $db="hamro";
    $user="root";
    $password="";

    // Constructing a Data Source Name (DSN) for PDO
    $dsn="mysql:host=$host;dbname=$db;";

    // Creating a new PDO (PHP Data Objects) instance for database connection
    $pdo=new PDO($dsn,$user,$password);

    // Retrieving user input from POST data
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $phonenumber=$_POST['phonenumber'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=$_POST['password'];

    // Constructing an SQL query to insert user data into the 'user' table
    $query="INSERT INTO user VALUES('$firstname','$lastname','$phonenumber','$email','$username','$password')";

    // Preparing the SQL query for execution
    $stmt=$pdo->prepare($query);

    // Executing the prepared statement, inserting user data into the database
    $stmt->execute();                             

    // Getting the referring URL
    $url=$_SERVER['HTTP_REFERER'];

    // Redirecting the user to 'hamrotour.html' after successful database insertion
    header("location:login.html");
?>