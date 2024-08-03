<?php
    $host="127.0.0.1";
    $db="hamro";
    $user="root";
    $password="";
    $dsn="mysql:host=$host;dbname=$db;";
    $pdo=new PDO($dsn,$user,$password);

    $Name=$_POST['Name'];
    $Email=$_POST['Email'];
    $Message=$_POST['Message'];

    $query="INSERT INTO contact VALUES('$Name','$Email','$Message')";
    $stmt=$pdo->prepare($query);
    $stmt->execute();
    $url=$_SERVER['HTTP_REFERER'];
    header("location:contact.html");
?>