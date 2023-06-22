<html lang="en">
<title>Home</title>

<head>
  <title>Home</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
  <link rel="stylesheet" href="./style.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
          <li class="nav-item"><a class="nav-link" href="./contactus.php">ContactUs</a></li>
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
         <select id="dropdown-list">
            <option value="Hoodie"selected>Pewdiepie 70 mill Club Hoodie-<b>$59.99</option>
            <option value="Hoodie">PewdiePie News Hoodie-<b>$45.00</option>
            <option value="Hoodie">Pewdiepie Anime Hoodie -<b>$50.00</option>
         </select>
        </div>
      </div>

      <div class="container" id="pewdsdrop">
        <h3>Size</h3>
        <div class="dropdown" style="padding-left: 20px; padding-top: 15px;">
          <select class="dropdown" id="dropdown-list">
              <option value="S"selected>Small</option>
              <option value="M">Medium</option>
              <option value="L">Large</option>
              <option value="XL">Extra-Large</option>
            </select>
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
          <select id="dropdown-list">
            <option value="Hoodie"selected>KSI AOTP Headline Tour Hoodie-<b>$59.99</option>
            <option value="Hoodie">KSI Not Over Yet Hoodie-<b>$40.00</option>
            <option value="Hoodie">KSI KSI Headline Tour Orange Hoodie-<b>$59.00</option>
         </select>
          </div>
        </div>

        <div class="container" id="ksidrop">
          <h3>Size</h3>
          <div class="dropdown" style="padding-left: 20px; padding-top: 15px;">
             <select class="dropdown" id="dropdown-list">
             <option value="S"selected>Small</option>
             <option value="M">Medium</option>
             <option value="L">Large</option>
             <option value="XL">Extra-Large</option>
            </select>
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
              <select id="dropdown-list">
                <option value="Hoodie"selected>KSI AOTP Headline Tour Hoodie-<b>$59.99</option>
                <option value="Hoodie">KSI Not Over Yet Hoodie-<b>$40.00</option>
                <option value="Hoodie">KSI KSI Headline Tour Orange Hoodie-<b>$59.00</option>
              </select>
              </div>
            </div>

            <div class="container" id="beastdrop">
              <h3>Size</h3>
              <div class="dropdown" style="padding-left: 20px; padding-top: 15px;">
              <select class="dropdown" id="dropdown-list">
                <option value="S"selected>Small</option>
                <option value="M">Medium</option>
                <option value="L">Large</option>
                <option value="XL">Extra-Large</option>
              </select>
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