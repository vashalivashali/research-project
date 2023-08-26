<?php
// Start a session
session_start();
require_once 'config.php'; // Include database connection settings


if (isset($_SESSION['user_id'])) {
    // User is logged in
    $user_id = $_SESSION['user_id']; // save user id in variable

    // can use $user_id for further processing
} 

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input from the login form
    $email = $_POST["email"];
    $password = $_POST["password"];
    //echo "email" . $row["email"]; // to verify is email is fetched or not
 
    // Validate user input as per requiremnet
    if (empty($email) || empty($password)) {
        $error_message = "Both email and password are required.";
    } else {
        // Establish the database connection using the function
        $connection = connectToDatabase();

        
        // fetch the password of email store in users database , registration table
        $query = "SELECT password FROM registration WHERE email = '$email'";
        $result = mysqli_query($connection, $query);

       
        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            //echo $row['password'];// to check password is feched or not
            $hashedPassword = $row["password"];

            // to display the password in order to solve the error
            //echo '\n'. $password .'\n';
           
            
            if ($password== $hashedPassword) {
                // Password matches, login successful
                $success_message = "Login successful";

                 // Set up session variables
                $_SESSION['email'] = $email;
                $_SESSION['loggedin'] = true;


                
                // Redirect to home page URL
                $redirectUrl = "http://localhost/research-project/website/index.php";
                header("Location: $redirectUrl");
                exit; //exit immediately after the redirect


            } else {
                // Incorrect password message
                $error_message = "Incorrect email or password.";
            }
        } else {
            // User not found
            $error_message = "User not found.";
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
    <title>Login Page</title>
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
</head>
</head>
<body>
     <!-- login section -->
     <div class="login container">
            <h3 class="login-logo">Fashion villa </h3>
            <div class="row">
                <div class="col-md-4" id="leftside"> <!-- divide page in two column-->
                    <h3>Hello Friend!</h3>
                    <p>Create New Account</p>
                    <div id="btn"><a href="sign_up.php">Sign up</a></div>
                </div>
                <div class="col-md-8" id="rightside">
                    <h3>Login Account</h3>

   

    <?php if (isset($error_message)) : ?>  <!-- display error message if password or id is wrong-->
        <p style="color: red;"><?php echo $error_message; ?></p>
    <?php endif; ?>

    <?php if (isset($success_message)) : ?>  <!-- display success message -->
        <p style="color: green;"><?php echo $success_message; ?></p>
    <?php endif; ?>
    

    
    
    <div class="inpt">
    <form method="post" action="">
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
  
        
        <div id="login"><button>LOG IN</button></div>
                    <a href="sign_up.php" class="link">new customer </a>
                </div>
            </div>
        </div>
    
        
    </form>
    </div>
</body>
</html>
