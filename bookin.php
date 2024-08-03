<?php
 $host="127.0.0.1";
 $db="hamro";
 $user="root";
 $password="";
 $dsn="mysql:host=$host;dbname=$db;";
 $pdo=new PDO($dsn,$user,$password);

 $Name=$_POST['Name'];
 $Email=$_POST['Email'];
 $Phone=$_POST['Phone'];
 $Date=$_POST['Date'];
 $Gender=$_POST['Gender'];
 $Place=$_POST['Place'];
 $No_person=$_POST['No_person'];
 $Transportation=$_POST['Transportation'];
 $query="INSERT INTO booked VALUES('$Name','$Email','$Phone','$Date','$Gender','$Place','$No_person','$Transportation')";
 $stmt=$pdo->prepare($query);
 $stmt->execute();
 $url=$_SERVER['HTTP_REFERER'];
 header("location:try.html");
?>