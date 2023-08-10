<?php
// Function to establish a database connection
function connectToDatabase() {
    $hostname = 'localhost:3306'; // Change this to your database host if it's different
    $username = 'root'; // Change this to your MySQL username
    $password = 'Database123'; // Change this to your MySQL password
    $database = 'users'; // Change this to your MySQL database name


    // Attempt to establish the connection
    $connection = mysqli_connect($hostname, $username, $password, $database);

    // Check connection
    if (!$connection) {
        die('Connection failed: ' . mysqli_connect_error());
    }

    return $connection;
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input from the registration form
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Validate user input (you can add more validation as per your requirements)
    if (empty($username) || empty($email) || empty($password)) {
        $error_message = "All fields are required.";
    } else {
        // Establish the database connection using the function
        $connection = connectToDatabase();

        // Hash the password before storing it in the database
      

        // Insert the user data into the database
        $sql = "INSERT INTO registration (username, email, password) VALUES ('$username', '$email', '$password')";

        // Execute the SQL query
        if (mysqli_query($connection, $sql)) {
            // Registration successful
            $success_message = "User registered successfully.";
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
                    <a class="nav-link active" aria-current="page" href="index.html">Home</a>
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
                
                    <button id="btn-signup"><a href="sign_up.php">Sign out</a></button>
        
                    
                    <i class="fa-solid fa-cart-shopping"></i>
                </div>
        
              </div>
            </div>
          </nav>
        </div>
        <!-- >navbar -->

   
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <div class="container" id="contact">
            <h1 class="text-center">CONTACT US</h1>
            <div class="row" style="margin-top: 50px;">
              
            <div class="row" style="margin-top: 30px;">
                <div class="col-md-4 py-3 py-md-0">
                    <input type="text" id="name" name="name" class="form-control form-control" placeholder="Name">
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
</body>
    </html>
