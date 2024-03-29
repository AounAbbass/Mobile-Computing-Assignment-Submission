<html lang="en">
<title>T-Shirts</title>

<head>
  <title>T-Shirts</title>
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
          <li class="nav-item"><a class="nav-link" href="./Hoodies.php">Hoodies</a></li>
          <li class="nav-item active"><a class="nav-link" href="./T-Shirts.php">T-Shirts</a></li>
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
          <img src="./photos/Pewds T-Shirt.jpg" alt="Pewds-T-Father-and-Son-Shirt" style="width:100%;">

        </div>

        <div class="item">
          <img src="./photos/Pewds T-Shirt 2.jpg" alt="Pew-Gamers-Shirt" style="width:100%;">

        </div>

        <div class="item">
          <img src="./photos/Pewds T-Shirt 3.jpg" alt="Pewds-70mill-club-Shirt" style="width:100%;">

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
            <option value="Pewds-T-Father-and-Son-Shirt"selected>Pewds-T-Father-and-Son-Shirt-<b>$29.99</option>
            <option value="Pew-Gamers-Shirt">PewdiePie Gamers Tee-<b>$19.99</option>
            <option value="Pewdiepie Pewds-70mill-club-Shirt">Pewdiepie 70mill Club Tee-<b>$49.99</option>
          </select>
        </div>
      </div>

      <div class="container" id="pewdsdrop">
        <h3>Size</h3>
        <div class="dropdown" style="padding-left: 20px; padding-top: 15px;">
            <select id="dropdown-list">
            <option value="S"selected>Small</option>
            <option value="M">Medium</option>
            <option value="L">Large</option>
            <option value="XL">Extra-Large</option>
          </select>
        </div>

        <a href="Orders.php" class="btn btn-danger btn-sm" id="shopbtn1" role="button">Buy Now!</a>
      </div>

      <div class="container">
        <h2>KSI</h2>
        <div id="myCarousel1" class="carousel slide">

          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="./photos/KSI T-Shirt 1.jpg" alt="KSI-Baldski-Tee " style="width:100%;">

            </div>

            <div class="item">
              <img src="./photos/KSI T-Shirt 2.jpg" alt="KSI-Saiyan-Tee" style="width:100%;">

            </div>

            <div class="item">
              <img src="./photos/KSI T-Shirt 3.jpg" alt="KSI-Keep-Up-Tee" style="width:100%;">

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
                <option value="KSI-Baldski-Tee"selected>KSI Baldski Tee-<b>$19.99</option>
                <option value="KSI-Saiyan-Tee">KSI Saiyan Tee-<b>$24.99</option>
                <option value="KSI-Keep-Up-Tee">KSI Keep Up Tee-<b>$20.99</option>
              </select>
            </div>
          </div>

          <div class="container" id="ksidrop">
            <h3>Size</h3>
            <div class="dropdown" style="padding-left: 20px; padding-top: 15px;">
            <select id="dropdown-list">
              <option value="S"selected>Small</option>
              <option value="M">Medium</option>
              <option value="L">Large</option>
              <option value="XL">Extra-Large</option>
            </select>
          </div>

            <a href="Orders.php" class="btn btn-danger btn-sm" id="shopbtn1" role="button">Buy Now!</a>
          </div>

        </div>

        <div class="container">
          <h2>MrBeast</h2>
          <div id="myCarousel2" class="carousel slide">

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="./photos/MR Beast Tee 1.jpg" alt="Mr-Beast-Tee" style="width:100%; height: 45%;">
              </div>

              <div class="item">
                <img src="./photos/Mr Beast Essential Tee.jpg" alt="Mr-Beast-Essentials-Tee" style="width:100%;">
              </div>

              <div class="item">
                <img src="./photos/Mr Beast Youth Tee.jpg" alt="Mr-Beast-Youth-Tee" style="width:100%;">
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
                <option value="Mr-Beast-Tee"selected>Mr Beast Tee<b>$35.00</option>
                <option value="Mr-Beast-Essentials-Tee">Mr Beast Essential Youth Tee-<b>$29.99</option>
                <option value="Mr-Beast-Youth-Tee">Mr Beast Youth Tee-<b>$31.99</option>
              </select>
              </div>
            </div>

            <div class="container" id="beastdrop">
              <h3>Size</h3>
              <div class="dropdown" style="padding-left: 20px; padding-top: 15px;">
                  <select id="dropdown-list">
                    <option value="S"selected>Small</option>
                    <option value="M">Medium</option>
                    <option value="L">Large</option>
                    <option value="XL">Extra-Large</option>
                  </select>
              </div>
              <a href="Orders.php" class="btn btn-danger btn-sm" id="shopbtn1" role="button">Buy Now!</a>
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