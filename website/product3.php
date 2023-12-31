<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  session_start();
  require_once 'config.php'; // Include database connection settings
 

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashion Villa</title>
    <link rel="shortcut icon" type="image" href="./image/logo2.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- bootstrap links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- bootstrap links -->
    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <!-- fonts links -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product Page</title>
  <!-- Add Bootstrap CSS link -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="product.css">
</head>
<body>

<div class="main-section">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Fashion Villa</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span><i class="fa-solid fa-bars" style="color: white;"></i></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="clothes.html">Clothes</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Category
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #1c1c50;">
                  <li><a class="dropdown-item" href="clothes.html">Clothes</a></li>
                  <li><a class="dropdown-item" href="bags.html">bags</a></li>
                  <li><a class="dropdown-item" href="shoes.html">Shoes</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">About Us</a>
              </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Us</a>
              </li>
            </ul>
            <div class="other-links">
                    <button id="btn-login"><a href="login.php">Login</a></button>
                    <button id="btn-signup"><a href="sign_up.php">Sign up</a></button>
        
                    <a href="cart.php">
                    <i class="fa-solid fa-cart-shopping"></i></a>
                </div>
    
          </div>
        </div>
      </nav>
    </div>
    <!-- >navbar -->



    <form action="index.php" method="post">
<div class="container mt-5">
  <div class="row">
    <div class="col-md-6">
      <img src="./image/b2.jpg" alt="Product Image" class="img-fluid" >
    </div>
    <div class="col-md-4">
    <h1>Hand Bag</h1>
      
    <p>Blue fabric hand-made Bag.with more space that esay to carry multiple things while travelling. </p>
      <p class="lead">£ 70</p>
      <div class="card-body d-flex justify-content-between">
           
            </div> 
            <a href="index.php" class="btn btn-success" name="buy_now">continue shopping</a>
</form>

            </form>
        </div>
    </div>
</div>

          




<!-- Add Bootstrap JS scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
