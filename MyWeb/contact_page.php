<?php

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$country = $_POST['country'];
$subject = $_POST['subject'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "master_decor";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO `contact_data` (`id`, `fname`, `lname`, `country`, `subject`) VALUES (NULL, '$firstname', '$lastname', '$country', '$subject')  ";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "Your Message was sent successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?> 