<html lang="en">
<title>Home</title>

<head>
  <title>Home</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css"
    integrity="sha512-BnbUDfEUfV0Slx6TunuB042k9tuKe3xrD6q4mg5Ed72LTgzDIcLPxg6yI2gcMFRyomt+yJJxE+zJwNmxki6/RA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="./font-awesome/css/font-awesome.min.css" />
  <link>
  <link rel="stylesheet" href="./style.css" />
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
          <li class="nav-item"><a class="nav-link" href="./Home (2).php">Home</a></li>
          <li class="nav-item active"><a class="nav-link" href="./Hoodies.php">Hoodies</a></li>
          <li class="nav-item"><a class="nav-link" href="./T-Shirts.php">T-Shirts</a></li>
          <li class="nav-item"><a class="nav-link" href="./Trousers&Shorts.php">Trousers/Shorts</a></li>
          <li class="nav-item"><a class="nav-link" href="./Orders.php">Orders</a></li>
          <li class="nav-item"><a class="nav-link" href="./Contact-Us.php">Contact Us</a></li>
          <li class="nav-item"><a class="nav-link" href="./Register.php">Register</a></li>
        </ul>
  </nav>

  <div class="container">
    <h2 style="margin-left: 10px;">PewdiePie</h2>
    <div id="myCarousel" class="carousel slide">


      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <img src="./photos/Pewds 70 mill club hoodie.jpg" alt="pewdiepie-70-mill-club-hoodie" style="width:100%;">

        </div>

        <div class="item">
          <img src="./photos/Pew News Hoodie.jpg" alt="Pewdiepie-News-Hoodie" style="width:100%;">

        </div>

        <div class="item">
          <img src="./photos/Pewds Anime Hoodie.jpg" alt="Pewdiepie-Anime-Hoodie" style="width:100%;">

        </div>


        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      <div class="container" id="pewdsdrop">
        <h3>Type</h3>
        <div class="dropdown" style="padding-left: 15px; padding-top: 15px;">
          <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Select your Hoodie
            <span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><a
                href="./photos/pewdiepie-70-mill-club-zipper-hoodie.jpg">Pewdiepie-70-mill-club-hoodie-<b>59.79$</b></a>
            </li>
            <li><a href="./photos/Pewdiepie Pew-News-Hoodie.png">Pewdiepie-News-Hoodie-<b>39.99$</b></a></li>
            <li><a href="./photos/Pewds Anime Hoodie.png">Pewdiepie-Anime-Hoodie-<b>49.99$</b></a></li>
          </ul>
        </div>
      </div>

      <div class="container" id="pewdsdrop">
        <h3>Size</h3>
        <div class="dropdown" style="padding-left: 20px; padding-top: 15px;">
          <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Select your Size
            <span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li class="active"><a href="#">Small</a></li>
            <li><a href="#">Medium</a></li>
            <li><a href="#">Large</a></li>
            <li><a href="#">Extra-Large</a></li>
          </ul>
        </div>
        <a href="Orders.php" class="btn btn-danger" id="shopbtn1" role="button">Buy Now!</a>
      </div>



      <div class="container">
        <h2>KSI</h2>
        <div id="myCarousel1" class="carousel slide">

          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="./photos/AOTP Headline Tour Hoodie.jpg" alt="KSI-AOTP-Headline-Tour-Hoodie" style="width:100%;">

            </div>

            <div class="item">
              <img src="./photos/Not Over Yet Hoodie.jpg" alt="KSI-Not-Over-Yet-Hoodie" style="width:100%;">

            </div>

            <div class="item">
              <img src="./photos/AOTP Orange Hoodie.jpg" alt="KSI-AOTP-Headline-Tour-Orange-Hoodie" style="width:100%;">

            </div>
          </div>
          <a class="left carousel-control" href="#myCarousel1" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel1" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <div class="container" id="ksidrop">
          <h3>Type</h3>
          <div class="dropdown" style="padding-left: 20px; padding-top: 15px;">
            <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Select your
              Hoodie</button>
            <span class="caret"></span>
            <ul class="dropdown-menu">
              <li><a href="./photos/AOTP Headline Tour Hoodie.jpg">KSI-AOTP-Headline-Tour-Hoodie-<b>75.00$</b></a></li>
              <li><a href="./photos/Not Over Yet Hoodie.jpg">KSI-Not Over Yet Hoodie-<b>$75.00</b></a></li>
              <li><a href="./photos/AOTP Orange Hoodie.jpeg">KSI-AOTP Orange Hoodie-<b>75.00$</b></a></li>
            </ul>
          </div>
        </div>

        <div class="container" id="ksidrop">
          <h3>Size</h3>
          <div class="dropdown" style="padding-left: 20px; padding-top: 15px;">
            <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Select your Size
              <span class="caret"></span>
              <ul class="dropdown-menu">
                <li class="active"><a href="#">Small</a></li>
                <li><a href="#">Medium</a></li>
                <li><a href="#">Large</a></li>
                <li><a href="#">Extra-Large</a></li>
              </ul>
          </div>

          <a href="Orders.php" class="btn btn-danger" id="shopbtn1" role="button">Buy Now!</a>

        </div>

        <div class="container">
          <h2>MrBeast</h2>
          <div id="myCarousel2" class="carousel slide">

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="./photos/Squid Game Hoodie.jpg" alt="Mr-Beast-Squid-Game-Hoodie"
                  style="width:100%; height: 45%;">
              </div>

              <div class="item">
                <img src="./photos/Mr Beast Hoodie.jpg" alt="Mr-Beast-Hoodie" style="width:100%;">
              </div>

              <div class="item">
                <img src="./photos/Mr Beast Grey Pullover hoodie.jpg" alt="Mr-Beast-Grey-Pullover-Hoodie"
                  style="width:100%;">
              </div>

              <a class="left carousel-control" href="#myCarousel2" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel2" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>

            <div class="container" id="beastdrop">
              <h3>Type</h3>
              <div class="dropdown" style="padding-left: 20px; padding-top: 15px;">
                <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Select your Hoodie
                  <span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li><a href="./photos/Squid Game Hoodie.jpg">Mr Beast Squid-Game-Hoodie-<b>60.00$</b></a></li>
                  <li><a href="./photos/Mr Beast Hoodie.jpg">Mr Beast Hoodie-<b>54.99$</b></a></li>
                  <li><a href="./photos/Grey Pullover Hoodie.jpg">Mr Beast Grey Pullover Hoodie-<b>54.99$</b></a></li>
                </ul>
              </div>
            </div>

            <div class="container" id="beastdrop">
              <h3>Size</h3>
              <div class="dropdown" style="padding-left: 20px; padding-top: 15px;">
                <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Select your Size
                  <span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li class="active"><a href="#">Small</a></li>
                  <li><a href="#">Medium</a></li>
                  <li><a href="#">Large</a></li>
                  <li><a href="#">Extra-Large</a></li>
                </ul>
              </div>
              <a href="Orders.php" class="btn btn-danger" id="shopbtn1" role="button">Buy Now!</a>
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
            $('.carousel').carousel({
              interval: false
            })
          </script>

          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</body>

</html>