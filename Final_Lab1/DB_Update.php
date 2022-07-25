<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "CRUD";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE DATABASE CRUD";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}
$conn->close();

$sql = "CREATE TABLE UP (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50) NOT NULL,
)";

if ($conn->query($sql) === TRUE) {
  echo "Table UP created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
$conn->close();

$sql = "INSERT INTO UP (firstname, lastname, email)
VALUES ('Rabby', 'Hossain', 'rabbyhossain2265@gmail.com')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

$sql = "UPDATE UP SET firstname='Remon', lastname='Islam', email='remon@gmail.com' WHERE id=2";

if ($conn->query($sql) === TRUE) {
  echo "Data updated successfully";
} else {
  echo "failed updating data: " . $conn->error;
}
$conn->close();

?>