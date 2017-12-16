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

 $Skin_post_id = $_POST["Skin_post_id"];
        $User_id=  $_POST["User_id"];
        $Skin_products_id=  $_POST["Skin_products_id"];
        $Skin_product_name =  $_POST['Skin_product_name'];
        $Skin_tag_name = $POST["Skin_tag_name"] ;
        $Review = $_POSTS["Review"] ;
        $Ratings = $_POST["Ratings"] ;

$rev_sql = "INSERT INTO user_has_skin_products (Skin_post_id, User_id, Skin_products_id,Skin_product_name,Skin_tag_name,Review, Ratings) VALUES ('$Skin_post_id', '$User_id', '$Skin_products_id', '$Skin_product_name', '$Skin_tag_name', '$Review', '$Ratings);";
query_to_db($conn, $rev_sql);

console.log("$email");
mysqli_close($conn);
?>






















?>