<html lang="en">
<title>EzMerch</title>

<head>
    <title>Register</title>
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
                    <li class="nav-item"><a class="nav-link" href="./T-Shirts.php">T-Shirts</a></li>
                    <li class="nav-item"><a class="nav-link" href="./Trousers&Shorts.php">Trousers/Shorts</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="./Orders.php">Orders</a></li>
                    <li class="nav-item"><a class="nav-link" href="./Contact-Us.php">Contact Us</a></li>
                    <li class="nav-item active
          "><a class="nav-link" href="./Register.php">Register</a></li>
                </ul>
    </nav>

    <div class="container">

        <div class="col-md-7 col-lg-8">
            <h4 class="mb-3">Enter Your Details</h4>
            <form method="post" action="Register.php">
                <br>
                <div class="row g-3">
                    <div class="col-sm-6">
                        <label for="Name" class="form-label">Full Name</label>
                        <input type="Name" class="form-control" name="Name" placeholder="Enter your Full Name">
                    </div>

                    <div class="col-sm-6">
                        <label for="Email"><span class="glyphicon glyphicon-user"></span> Email</label>
                        <input type="Email" class="form-control" name="Email" placeholder="Enter email">
                    </div>

                    <div class="col-sm-6">
                        <label for="password"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter password">
                    </div>
                    <div class="input-group" style="margin-left: 130px; margin-top: 20px;">
                        <button type="submit" class="btn" name="reg_user">Register</button>
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

                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>

</html>

<?php

// initializing variables
$Email = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'ezmerch');

// REGISTER USER
if (isset($_POST['reg_user'])) {
    // receive all input values from the form
    $Email = mysqli_real_escape_string($db, $_POST['Email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);


    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($Email)) {
        array_push($errors, "Username is required");
    }

    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    // first check the database to make sure 
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM user WHERE Email='$Email'  LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // if user exists
        if ($user['Email'] === $Email) {
            array_push($errors, "Username already exists");
        }


    }

    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
        $password = md5($password); //encrypt the password before saving in the database

        $query = "INSERT INTO user (Email,password) 
  			  VALUES('$Email','$password')";
        mysqli_query($db, $query);
        $_SESSION['Email'] = $Email;
        $_SESSION['success'] = "Your information has been saved Successfully";
        header('location: Register.php');
    }
}

?>