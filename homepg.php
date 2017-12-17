<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
        <li class="active"><a href="homepg.php">Home</a></li>
          
        <li><a href="AboutUs.html">About Us</a></li>
        <li><a href="PersonalPost.php"> Your Posts </a></li>
        <li class="nav nav-pills"><a class="nav-link active" href="WritePost.php">Write a Post</a>
          </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
      </ul>

        <form class="navbar-form navbar-right" role="search">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
              </div>
              <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
  </div>
</nav>
  

            <!---->
            <!---->

            <div class="container-fluid">
 

            <div class="jumbotron">
                <h1>Welcome to Fetch!</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas egestas venenatis augue at condimentum. Mauris ultrices ligula sem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vestibulum mattis non libero vel efficitur. Nullam id quam vitae ante dapibus pharetra eget ut purus. Suspendisse potenti. Quisque eget placerat ante. Mauris sit amet libero at orci pretium cursus vel ullamcorper augue. Donec ut lectus nulla.</p>
            </div>


        </div>

           
            <div class="container bg-3 text-center">
                <h3>Categories</h3>
                <div class="row">
                    <div class="col-md-6">
                        <div class="well">
                            <p>Skin</p>
                            <a href="SkinProductpg.php"><img src="http://www.junelaboratories.com/wp-content/uploads/icon-skin-care.png" alt="artboard2" width="350" height="350"> </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="well">
                            <p>Hair</p>
                            <a href="HairProductpg.php"><img src="https://previews.123rf.com/images/keltt/keltt1402/keltt140200021/26056086-red-scissors-and-hair-style-hair-care-icon-Stock-Vector.jpg" alt="artboard2" width="350" height="350">
                            </a>
                        </div>
                    </div>
                    <br>
                </div>
                <br>
                <br>
            </div>
        </div>
    </body>
    
</html>
