      <?php
$server = "localhost";
$username = "root";
$password = "root";
$db = "fetch";


$conn = mysqli_connect($server, $username, $password, $db);



// Receving the submitted data
$email = $_POST["email"];

// You need to save the data into the database. Write an INSERT query here.

$sql = "INSERT INTO user (email) VALUES ('$email');";
query_to_db($conn, $sql);

console.log("$email");
mysqli_close($conn);


?>






















?>