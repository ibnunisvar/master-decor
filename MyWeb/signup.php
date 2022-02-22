<?php

$name = $_POST['name'];
$email = $_POST['email'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "master_decor";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO `signup` (`id`, `name`, `email`) VALUES (NULL, '$name', '$email') ";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "Thank you for signing up";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?> 