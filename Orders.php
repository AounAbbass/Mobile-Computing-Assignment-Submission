<html lang="en">

<head>
  <title>Orders</title>
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
          <li class="nav-item"><a class="nav-link" href="./Hoodies.php">Hoodies</a></li>
          <li class="nav-item"><a class="nav-link" href="./T-Shirts.php">T-Shirts</a></li>
          <li class="nav-item"><a class="nav-link" href="./Trousers&Shorts.php">Trousers/Shorts</a></li>
          <li class="nav-item active"><a class="nav-link" href="./Orders.php">Orders</a></li>
          <li class="nav-item"><a class="nav-link" href="./contactus.php">ContactUs</a></li>
        </ul>
        </div>
  </nav>
  <div class="container">
  <form action="orders.php" method="post" onsubmit="openModal()" id="myForm">
    <div class="col-md-7 col-lg-8">
      <h4 class="mb-3">Billing Details</h4>
      <div class="row g-3">
        <div class="col-sm-6">
          <label for="Name" class="form-label">Name</label>
          <input type="text" name="Name" placeholder="Enter your Full Name">
        </div>
        <div class="col-sm-6">
          <label for="Email" class="form-label">Email</label>
          <input type="text" name="Email" placeholder="Enter your Email">
        </div>
        <div class="col-sm-6">
          <label for="Address" class="form-label">Address</label>
          <input type="text" name="Address" placeholder="1234 Main St">
        </div>
        <div class="col-sm-6">
          <label for="Zip" class="form-label">Zip</label>
          <input type="text" name="Zip" placeholder="e.g.123456">
        </div>
        <div class="container">
          <button class="w-100 btn btn-primary btn-lg" style="margin-left: 100px; margin-top: 5px;" type="submit" name="submit">Place Order</button>
        </div>
      </div>
    </div>
  </form>

  <div class="modal fade" tabindex="-1" role="dialog" id="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><b>Order Details Recieved Successfully!</b></h4>
      </div>
      <div class="modal-footer justify-content-center">
        <button id="closebtn" type="button" class="btn btn-success" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

</div>

<footer>
  <div class="container">
    <div class="row">
      <div class="row justify-content-center">
        <div class="col-auto">
          <p>© 2022 EzMerch</p>
        </div>
        <a href="mailto:hege@example.com">maliccaoun@gmail.com</a></p>
      </div>
    </div>
  </div>
</footer>

<script>
  function openModal() {
    $('#myModal').modal('show');
    event.preventDefault();
  }

  function submitForm() {
    var form = document.getElementById("myForm");
    form.submit();
  }

  $('#myModal').on('hidden.bs.modal', function () {
    submitForm();
  });
</script>
    
</body>

</html>
<?php

// initializing variables
$Email = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'ezmerch');

// REGISTER USER
if (isset($_POST['submit'])) {
  // receive all input values from the form
  $Name = mysqli_real_escape_string($db, $_POST['Name']);
  $Email = mysqli_real_escape_string($db, $_POST['Email']);
  $Address = mysqli_real_escape_string($db, $_POST['Address']);
  $Zip = mysqli_real_escape_string($db, $_POST['Zip']);


  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($Name)) {
    array_push($errors, "Name is required");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM orders WHERE Email='$Email'  LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['Email'] === $Email) {
      array_push($errors, "Order already exists");
    }


  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $password = md5($password); //encrypt the password before saving in the database

    $query = "INSERT INTO orders (Name,Email,Address,Zip) 
  			  VALUES('$Name','$Email','$Address','$Zip')";
    mysqli_query($db, $query);
    $_SESSION['Email'] = $Email;
    header('location: orders.php');
  }
}

?>
