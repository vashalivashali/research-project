<?php
session_start();
require_once 'config.php'; // Include database connection settings
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashion Villa</title>
    <link rel="shortcut icon" type="image" href="./image/logo2.png">
    <link rel="stylesheet" href="style.css"> <!--add styles to website-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- bootstrap links --> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- bootstrap links -->
    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>  <!-- add copyright --> 
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">  <!-- add google libraries for style --> 
    <!-- fonts links -->
</head>
<body>

    <div class="main-section">
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg" id="navbar">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Fashion Villa</a> <!--add website name  -->
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
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #1c1c50;"> <!-- create drop down list--> 
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
            </div>
          </nav>
        </div>
        <!-- >navbar -->




        <!-- main content -->
        <section class="main">
            <div class="content">
                <h3>Fashion Villa </h3>
                <p>Best shopping Collection for all Time</p>
                <button id="shopnow">Shop Now</button>
            </div>
            <div class="img">
                <img src="./image/heel.jpg" alt="">
            </div>
        </section>
        <!-- main content -->
    <!-- Products List -->
<div class="row">
    <div class="col-md-12">
        <h1>Products List</h1>
        <div class="d-flex flex-wrap"> 
            <?php
            $query = "SELECT * FROM products";    // fetch products details from database
            $product = mysqli_query($con, $query);
            if (!empty($product)) {   // check the products table is  not empty 
                while ($row = mysqli_fetch_array($product)) {
            ?>
            <div class="card" style="width: 19rem; margin: 10px; height:25rem"> <!-- create cart container to set product list with dimention -->
                <img class="card-img-top"            
                     src="http://localhost/website<?= $row['image']; ?>"alt="<?= $row['name']; ?>" width="150" height="285">
                <div class="card-header d-flex justify-content-between">
                    <span><?= $row['name']; ?></span>
                    <span>£<?= number_format($row['price'], 2); ?></span>
                </div>
                <div class="star">
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                        </div>
                <div class="card-body d-flex justify-content-between">
                    <form action="cart.php?action=add&pid=<?= $row['id']; ?>" method="post">
                        <input type="text" name="quantity" value="1" size="2">             <!--manually adjust the quantity -->
                        <input type="submit" value="Add to Cart" class="btn btn-success btn-sm">  <!--add items in cart -->
                        
                    </form>
                    <!-- Add a button or link to view product details -->
                    <a href="product<?= $row['id']; ?>.php?pid=<?= $row['id']; ?>" class="btn btn-primary btn-sm">View Details</a>
                
                </div>
            </div>
            <?php
                }
            } else {
                echo "No products available.";     // product list is empty
            }
            ?>
        </div>
    </div>
</div>

    <!-- another product cards , multiple cart with price, star, image -->
    <div class="container" id="product-cards">
        <h1 class="text-center">PRODUCT</h1>
        <div class="row" style="margin-top: 30px;">
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="./image/t-shirt1.png" alt="">
                    <div class="card-body">
                        <h3>Men T-Shirt</h3>
                        <div class="star">
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                        </div>
                        
                        <h5> £70</h5>
                           
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="./image/redheel.jpg" alt="">
                    <div class="card-body">
                        <h3>Red Heel</h3>
                        <div class="star">
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                        </div>
                        
                        <h5> £70</h5>
                           
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="./image/sho1.jpg" alt="">
                    <div class="card-body">
                        <h3>Men Shoes</h3>
                        <div class="star">
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                        </div>
                        
                        <h5>£50</h5>
                            
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="./image/jacket.png" alt="">
                    <div class="card-body">
                        <h3>Men Jacket</h3>
                        <div class="star">
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                        </div>
                        
                        <h5>£80</h5>
                            
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="margin-top: 30px;">
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="./image/t-shirt.png" alt="">
                    <div class="card-body">
                        <h3>Blue T-Shirt</h3>
                        <div class="star">
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                        </div>
                        
                        <h5>£70</h5>
                            
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="./image/sandal2.jpg" alt="">
                    <div class="card-body">
                        <h3>Girls Sandal</h3>
                        <div class="star">
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                        </div>
                        
                        <h5>£70</h5>
                            
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="./image/mjacket.png" alt="">
                    <div class="card-body">
                        <h3>Men Jacket</h3>
                        <div class="star">
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                        </div>
                        <h5>£70</h5>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="./image/t-shirt3.png" alt="">
                    <div class="card-body">
                        <h3>Men T-SHirt</h3>
                        <div class="star">
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                        </div>
                        <h5> £60</h5>
                           
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    

<!-- footer -->
<footer id="footer" style="margin-top: 50px;">
<div class="footer-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 footer-content">
                <h3>Fashion Villa</h3>
                <p>Best Fashion Collection for all the time </p>
                <p>
                    Lalita <br>
                    Devi <br>
                    India  <br>
                </p>
                <strong><i class="fas fa-phone"></i> Phone: <strong>+91 6284562447</strong></strong><br>
                <strong><i class="fa-solid fa-envelope"></i> Email: <strong>fashionvilla@gmail.com</strong></strong>
            </div>
            <div class="col-lg-3 col-md-6 footer-links">
                <h4>Usefull Links</h4>
                <ul>
                  <li><a href="index.php">Home</a></li>
                  <li><a href="about.html">About</a></li>
                  <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 footer-links">
                <h4>Our Services</h4>
                <p>Best Fashion Collection all the time. Do shopping now.</p>
                <ul>
                    <li><a href="clothes.html">Clothe</a></li>
                    <li><a href="Bags.html">Bags</a></li>
                    <li><a href="shoes.html">shoes</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 footer-links">
                <h4>Our Social Network</h4>
                <p> Best Fashion Collection all the time. Do shopping through different social plateform. </p>
                <div class="social-links mt-3">
                    <a href="#" class="twiiter"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="twiiter"><i class="fa-brands fa-google-plus"></i></a>
                    <a href="#" class="twiiter"><i class="fa-brands fa-instagram"></i></a>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
<div class="container py-4">
    <div class="copyright">
        &copy; Copyright <strong>FashionVilla</strong>.All Rights Reserved
    </div>
</div>
</footer>
<!-- footer -->

<a href="#" class="arrow"><i><img src="./image/up-arrow.png" alt="" width="50px"></i></a><!--add arrow to page up --> 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>