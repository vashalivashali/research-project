<?php
// Function to establish a database connection
function connectToDatabase() {
    $hostname = 'localhost:3306'; //  database host
    $username = 'root'; //  MySQL username
    $password = 'Database123'; // MySQL password
    $database = 'users'; // MySQL database name


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

    // Validate user input 
    if (empty($username) || empty($email) || empty($password)) {
        $error_message = "All fields are required.";
    } else {
        // Establish the database connection using the function
        $connection = connectToDatabase();
      

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


        <!-- login section -->
        <div class="login container">
        <h3><center>Fashion villa </center> </h3>
            <div class="row">
                <div class="col-md-4" id="leftside">
                    <h3>Welcome Back!!</h3>
                    <div id="btn"><a href="login.php">Login</a></div>
                </div>
                <div class="col-md-8" id="rightside">
                    <h3>Create Account</h3>

                    <!-- take customer detail for signup -->
                    <div class="inpt">
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

                        <input type="text"  name="username" placeholder="Name" required>
                        <input type="email" name="email" placeholder="Email" required>
                        <input type="password" name="password" placeholder="Password" required>
                        
                    </div>
                    
                    <div id="login"><button>SIGN UP</button></div>
                    <a href="login.php" class="link">already have an account? log in here </a>
                </div>
            </div>
        </div>
        <!-- login section -->
</body>
</html>