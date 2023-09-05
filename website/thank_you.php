<?php
session_start();
$_SESSION['order_placed'] = true;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="thank_you.css">
    <title>Thank You</title>
</head>
<body>
    <div class="main-message">
    <div class="message">
        <h1>Thank You!</h1>
        <p>Your order has been placed successfully. Explore again FashionVilla</p>
        <p>Your order will be processed shortly. 
        </p>
        <p><b>Cash on delivery</b></p>
        <p><a href="index.php">Continue Shopping</a></p>
    </div>
    </div>
</body>
</html>
