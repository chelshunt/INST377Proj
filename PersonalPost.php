<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

   <script src="https://code.jquery.com/jquery-1.12.4.js"></script>

  <title>Your Post</title>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }

    .panel-group, h1{
      padding: 20px;
    }
    
    /* Set black background color, white text and some padding */
    /*footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }*/
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
    </head>
    <body>

        <?php
$server = "localhost";
$username = "root";
$password = "root";
$db = "sakila";
$port = 8889;

$conn = mysqli_connect($server, $username, $password, $db, $port);

//Gets 3 customers ** change this to a query that shows all post that a specifc user posts
 $sql = "SELECT c.first_name, c.last_name, c.email, a.address, ci.city FROM customer as c 
JOIN address AS a 
ON c.address_id = a.address_id 
JOIN city AS ci ON a.city_id = ci.city_id
ORDER BY c.last_name LIMIT 3";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {   
    while($row = mysqli_fetch_assoc($result)) {
         $first_name = $row["first_name"];
        $last_name=  $row['last_name'];
        $email=  $row['email'];
        $address =  $row['address'];
        $city = $row['city'] ;
    
     }
          
 }

?>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="homepg.php">FETCH</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="Productpg.php">All Posts</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="PersonalPost.php"> Your Posts </a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="FETCH.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>

          <form class="navbar-form navbar-right" role="search">
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Search">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
    </div>
    </nav> 
  
  <h1> These are all your posts </h1>
  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <?php $i=1; foreach ($result as $acontent) { ?>
           <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading<?php echo $i; ?>">

                  <!-- this is the heading section  that will create the collasping of the details section-->
                    <h4 class="panel-title">
                        <a <?php if($i>1) echo 'class="collapsed"'; ?> role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i; ?>" aria-expanded="<?php echo ($i==1) ? 'true':'false'; ?>true" aria-controls="collapse<?php echo $i; ?>">

                          <!-- insert what you want the heading from db to print -->
                            <?php echo $acontent['first_name']; ?>
                        </a>
                    </h4>
                </div>
                <div id="collapse<?php echo $i; ?>" class="panel-collapse collapse <?php if($i==1) echo 'in'; ?>" role="tabpanel" aria-labelledby="heading<?php echo $i; ?>">

                  <!-- this is the details section -->
                    <div class="panel-body">
                      <!--  Insert in the echo what you want from the db info that you want included -->
                        <?php echo $acontent['address'] ,  $acontent['email'] ,$acontent['city'] ; ?>
                    </div>
                </div>
            </div> 
        <?php $i++; } ?>
        </div>


 </body>
    
</html>