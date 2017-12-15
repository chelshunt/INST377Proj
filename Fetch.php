<?php

//code to revceive the input data

$email = $_POST["email"];




$server = "localhost";
$username = "root";
$password = "root";
$db = "sakila";

 $conn = mysqli_connect($server, $username, $password, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully<br><br>";





















?>