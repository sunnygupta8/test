<?php
$servername = "localhost";
$username = "username";
$password = "password";
$database =  "registarion"

$conn = mysqli_connect($servername, $username, $password ,$database);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "CREATE DATABASE  registarion";
if (mysqli_query($conn, $sql)) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . mysqli_error($conn);
}
 
 $query=  "CREATE TABLE User
    (
        Id INT NOT NULL IDENTITY(1, 1) PRIMARY KEY CHECK (Id > 0),
        username VARCHAR(120) NOT NULL,
        password VARCHAR(120) NOT NULL,
        Address1    VARCHAR(120) NOT NULL,
        Address2    VARCHAR(120),
        Street        VARCHAR(100) NOT NULL,
        State       CHAR(2) NOT NULL,
        Country     CHAR(2) NOT NULL,
        PostalCode  VARCHAR(16) NOT NULL
    )";
    if ($conn->query($query) === TRUE) {
  echo "Table User created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
    
?>