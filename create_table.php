 <?php

$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "CREATE DATABASE IF NOT EXISTS master_decor";
  // use exec() because no results are returned
  $conn->exec($sql);

  $sql = "USE master_decor";

  $conn->exec($sql);
  // sql to create table
  $sql= "CREATE TABLE IF NOT EXISTS signup(
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL
  );
  CREATE TABLE IF NOT EXISTS contact_data(
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  fname VARCHAR(255) NOT NULL,
  lname VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  subject TEXT NOT NULL
  )
  ";

  $conn->exec($sql);
  echo "Tables created successfully<br>";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

?> 