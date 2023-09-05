<?php
require_once 'config.php'; // Include database connection settings

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input from the registration form
    $username = $_POST["username"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    // Validate user input based on username,email,phone
    if (empty($username) || empty($email) || empty($phone)) {
        $error_message = "All fields are required.";
    } else {
        // Establish the database connection using the function
        $connection = connectToDatabase();
      

        // Insert the user data into the database
        $sql = "INSERT INTO contacts (username, email, phone, message) VALUES ('$username', '$email', '$phone','$message')";

        // Execute the SQL query
        if (mysqli_query($connection, $sql)) {
            // Registration successful
            $success_message = "Thank you for Meassge  ";
        } else {
            // Registration failed
            $error_message = "Error: " . mysqli_error($connection);
        }

        // Close the database connection
        mysqli_close($connection);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    <title>Contact Form</title>
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
                    <a class="nav-link" href="contact.html">Contact Us</a>
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

   
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"> <!-- connect the page with database to store user given data -->
    <div class="container" id="contact">
            <h1 class="text-center">CONTACT US</h1>
            <div class="row" style="margin-top: 50px;">  
              
            <div class="row" style="margin-top: 30px;">   <!-- divide the page -->
                <div class="col-md-4 py-3 py-md-0">
                    <input type="text" id="name" name="name" class="form-control form-control" placeholder="Name"><!--to take name as input from user  -->
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <input type="text" id="email" name="email"  class="form-control form-control" placeholder="Email">
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <input type="number" id="phone" name="phone" class="form-control form-control" placeholder="Phone">
                </div>
               <div class="form-group" style="margin-top: 30px;">
                <textarea class="form-control"  id="message" name="message" rows="5" placeholder="Message"></textarea>
            </div>
            <div id="messagebtn"  type="submit" value="Submit" class="text-center"><button>Message</button></div>
            </div>
        </div>


        
    </form>

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
                  <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 footer-links">
                <h4>Our Services</h4>
                <p>Best Fashion Collection all the time. Do shopping now.</p>
                <ul>
                    <li><a href="clothes.html">Clothes</a></li>
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
