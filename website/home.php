<?php
session_start();

/*if (isset($_SESSION['email'])) {    in order to examine email to login
    echo "Logged in as: " . $_SESSION['email'];
} else {
    echo "Not logged in";
}*/
?>



<!DOCTYPE html>
<html lang="en">
<head>
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
                    <a class="nav-link active" aria-current="page" href="home.php">Home</a>
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
                
                    <button id="btn-signup"><a href="logout.php">log out</a></button>
        
                    
                    <i class="fa-solid fa-cart-shopping"></i>
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
    

    <!-- top cards -->
    <div class="container" id="top-cards">
        <div class="row">
            <h1 class="text-center">RECENT NEW PRODUCT</h1>
            <div class="col-md-5 py-3 py-md-0">
                <div class="card" style="background-color: #a9a9a926;">
                    <img src="./image/shoes.jpg" alt="">
                    <div class="card-img-overlay">
                        <h5 class="card-titel">Girls Shoes</h5>
                        
                        <h5>Rs.700 <br>
                            £70</h5>
                            <button id="btn-signup"><a href="product.html">Order Now</a></button>
    
                    
                    </div>
                </div>
            </div>
            <div class="col-md-4 py-3 py-md-0">
                <div class="card" style="background-color: #a9a9a926;">
                    <img src="./image/mshoes.jpg" alt="">
                    <div class="card-img-overlay">
                        <h5 class="card-titel">Nike Shoes</h5>
                        
                        <h5>Rs.700 <br>
                            £70</h5>
                        <button id="btn-signup"><a href="product1.html">Order Now</a></button>

                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card" style="background-color: #a9a9a926;">
                    <img src="./image/b2.jpg" alt="">
                    <div class="card-img-overlay">
                        <h5 class="card-titel">Bag</h5>
                        
                        <h5>Rs.700 <br>
                            £70</h5>
                        <button id="btn-signup"><a href="product2.html">Order Now</a></button>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- top cards -->
    

    <!-- product cards -->
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
                        
                        <h5>Rs.700 <br>
                            £70</h5>
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
                        
                        <h5>Rs.700 <br>
                            £70</h5>
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
                        
                        <h5>Rs.500 <br>
                            £50</h5>
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
                        
                        <h5>Rs.800 <br>
                            £80</h5>
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
                        
                        <h5>Rs.700 <br>
                            £70</h5>
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
                        
                        <h5>Rs.700 <br>
                            £70</h5>
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
                        <h5>Rs.800 <br>
                        £70</h5>
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
                        <h5>Rs.600 <br>
                            £60</h5>
                    </div>
                </div>
            </div>
        </div>
        <a href="clothe.html" id="viewmorebtn">View More</a>
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
                  <li><a href="index.html">Home</a></li>
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

<a href="#" class="arrow"><i><img src="./image/up-arrow.png" alt="" width="50px"></i></a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>