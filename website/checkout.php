
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="checkout.css">
    <title>Checkout</title>
</head>
<body>
    <h1>Checkout</h1>
    <?php
    if (isset($_SESSION['order_placed']) && $_SESSION['order_placed']) {
        echo '<p style="text-align: center; color: green;">Thank you for your order! Your order will be processed shortly.</p>';
        unset($_SESSION['order_placed']); // Remove the session variable after displaying the message
    }
    ?>
    <form action="thank_you.php" method="POST">
        <label for="name">Name: </label>
        <input type="text" name="name" required class="check_text"><br>
        <label for="email">Email: </label>
        <input type="email" name="email" required class="check_email"><br>
        <input type="submit" value="Place Order" class=" check_submit">
    </form>
</body>
</html>


















