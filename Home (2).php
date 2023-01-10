<html lang="en">

<head>
  <title>Home</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
  <link rel="stylesheet" href="./style.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="./htdocs/font-awesome/css/font-awesome.min.css" />
</head>

<body>
  <nav class="d-flex navbar navbar-inverse navbar-dark bg-light no-wrap" id="fixednav">
    <div class="container-fluid">
      <div class="navbar-header">

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <i class="fa fa-bars" style="font-size:24px"></i>
        </button>

        <a class="navbar-brand" href="#">EzMerch</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="nav-item active"><a class="nav-link" href="./Home (2).php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="./Hoodies.php">Hoodies</a></li>
          <li class="nav-item"><a class="nav-link" href="./T-Shirts.php">T-Shirts</a></li>
          <li class="nav-item"><a class="nav-link" href="./Trousers&Shorts.php">Trousers/Shorts</a></li>
          <li class="nav-item"><a class="nav-link" href="./Orders.php">Orders</a></li>
          <li class="nav-item"><a class="nav-link" href="./Contact-Us.php">Contact Us</a></li>
          <li class="nav-item"><a class="nav-link" href="./Register.php">Register</a></li>
        </ul>
  </nav>


  <div class="container">
    <div class="form-group has-feedback has-search">
      <span class="glyphicon glyphicon-search form-control-feedback"></span>
      <input type="text" class="form-control" placeholder="Search">
    </div>

    <h1><strong>All YouTube Merch in One Spot!</strong></h1>
    <div class="embed-responsive embed-responsive-16by9">
      <iframe class="embed-responsive-item" src="./photos/mixkit-friends-laughing-on-a-bus-42583.mp4"></iframe>
    </div>

    <div class="card">
      <div class="card-header">
        Critics' Reviews
      </div>
      <div class="card-body">
        <blockquote class="blockquote mb-0" id="critics">
          <p>Simple, Elegant design. Beauty to look at and easy to work with as it points me to my favourite vlogger
            merch with just a click of a button or a simple search. No competition in the game for me!</p>
          <footer class="blockquote-footer"> Austin Reeves <cite title="Source Title"> Avid MrBeast Fanboy</cite>
          </footer>
        </blockquote>
        <blockquote class="blockquote mb-0" id="critics">
          <p>Man did I hit the jackpot when i stumbled onto this app. Had to search for my favourite youtuber merch
            across numerouse webistes but finally I've landed on a site where everything is availbale in one spot Fully
            Recommeded</p>
          <footer class="blockquote-footer"> Alaina Mcbroom <cite title="Source Title"> Floor-Gang for life</cite>
          </footer>
        </blockquote>
      </div>
    </div>

    <div class="container">
      <div class="text-center">
        <button type="button" class="btn btn-default btn-lg" id="myBtn">Login <i class="fa fa-sign-in"
            aria-hidden="true"></i></button>
      </div>
      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header" style="padding:35px 50px;">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4><span class="glyphicon glyphicon-lock"></span> Login to your Account</h4>
            </div>
            <div class="modal-body" style="padding:40px 50px;">
              <form role="form" method="post" action="Home (2).php">
                <div class="form-group">
                  <label for="Email"><span class="glyphicon glyphicon-user"></span> Email</label>
                  <input type="Email" class="form-control" name="Email" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="password"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                  <input type="password" class="form-control" name="pswd" placeholder="Enter Password">
                </div>
                <div class="checkbox">
                  <label><input type="checkbox" value="" checked>Remember me</label>
                </div>
                <button type="submit" name="submit" class="btn btn-success btn-block"><span
                    class="glyphicon glyphicon-off"></span>
                  Submit</button>
                <div class="modal-footer d-flex justify-content-center">
                  <div class="signup-section">Not a member yet? <a href="#a" class="text-info"> Register</a>.</div>
                </div>
              </form>
            </div>

          </div>

        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="row justify-content-center">
          <div class="col-auto">
            <p>© Copyright 2022 EzMerch</p>
          </div>
          <a href="mailto:hege@example.com">maliccaoun@gmail.com</a></p>
        </div>
      </div>
    </div>
  </footer>

  <script>
    $(document).ready(function () {
      $("#myBtn").click(function () {
        $("#myModal").modal();
      });
    });
  </script>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </nav>
</body>

</html>

<?php

$dbcon = mysqli_connect("localhost", "root", "");
mysqli_select_db($dbcon, "ezmerch");

if (isset($_POST['submit'])) {

  $Email = $_POST['Email'];
  $password = $_POST['pswd'];

  $check_user = "select * from user WHERE Email='$Email' AND password='$password'";

  $run = mysqli_query($dbcon, $check_user);

  if (mysqli_num_rows($run)) {
    session_start();
    $_SESSION['Email'] = $Email; //here session is used and value of $uname store in $_SESSION.  
    echo "<script>window.open('Hoodies.php','_self')</script>";
  } else {
    echo "<script>alert('Email or password is incorrect!')</script>";
  }
} else {

}

?>