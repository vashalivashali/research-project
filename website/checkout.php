
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <style>  <!-- internal stylesheet-->
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            padding: 20px;
            background-color: #1c1c50;;
            color: #fff;
            margin: 0;
        }

        form {
            max-width: 500px;
            margin: auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus,
        input[type="email"]:focus {
            border-color: #666;
        }

        input[type="submit"] {
            background-color: #1c1c50;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

     
    </style>
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
        <input type="text" name="name" required><br>
        <label for="email">Email: </label>
        <input type="email" name="email" required><br>
        <input type="submit" value="Place Order">
    </form>
</body>
</html>


















