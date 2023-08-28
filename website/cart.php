<?php
session_start();
require_once 'config.php';

// add, remove, empty
if (!empty($_GET['action'])) {
    switch ($_GET['action']) { // onw of them action will perform
        // add product to cart
        case 'add':
            if (!empty($_POST['quantity'])) {
                $pid = $_GET['pid'];
                $query = "SELECT * FROM products WHERE id=" . $pid;  // add item in cart after fetch the item from database using item_id
                $result = mysqli_query($con, $query);
                while ($product = mysqli_fetch_array($result)) {
                    $itemArray = [
                        $product['code'] => [           // retrieve all information from database
                            'name' => $product['name'],
                            'code' => $product['code'],
                            'quantity' => $_POST['quantity'],
                            'price' => $product['price'],
                            'image' => $product['image']
                        ]
                    ];
                    if (isset($_SESSION['cart_item']) &&!empty($_SESSION['cart_item'])) {
                        if (in_array($product['code'], array_keys($_SESSION['cart_item']))) {
                            foreach ($_SESSION['cart_item'] as $key => $value) {
                                if ($product['code'] == $key) {
                                    if (empty($_SESSION['cart_item'][$key]["quantity"])) {
                                        $_SESSION['cart_item'][$key]['quantity'] = 0;
                                    }
                                    $_SESSION['cart_item'][$key]['quantity'] += $_POST['quantity'];  // display information 
                                }
                            }
                        } else {
                           
                            $_SESSION['cart_item'] += $itemArray;
                        }
                    } else {
                        $_SESSION['cart_item'] = $itemArray;
                    }
                }
            }
            break;
        case 'remove':                   //remove item from cart list
            if (!empty($_SESSION['cart_item'])) {
                foreach ($_SESSION['cart_item'] as $key => $value) {
                    if ($_GET['code'] == $key) {               // fetch the  item from cart 
                        unset($_SESSION['cart_item'][$key]);
                    }
                    if (empty($_SESSION['cart_item'])) {
                        unset($_SESSION['cart_item']);
                    }
                }
            }
            break;
        case 'empty':
            unset($_SESSION['cart_item']);//
            break;
    }
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopping Cart</title>
    
    <link rel="stylesheet" href="cart-style.css">  <!-- add style  -->
</head>
<body>

<div class="container py-5">
    <div class="d-flex justify-content-between mb-2">
        <h1> Shopping Cart</h1>
        <a class="btn btn-danger" href="cart.php?action=empty">All Item Remove</a>
    </div>
    <div class="row">
        <?php
            $total_quantity = 0;
            $total_price = 0;
        ?>
        <table class="table">   <!-- create table to display all items with details  -->
            <tbody>
            <tr>
                
                <th class="text-left">Name</th>
                <th class="text-left">Code</th>
                <th class="text-right">Quantity</th>
                <th class="text-right">Item Price</th>
                <th class="text-right">Price</th>
                <th class="text-center">Remove</th>
            </tr>
            <?php
            if (isset($_SESSION['cart_item']) && !empty($_SESSION['cart_item'])){ 
                foreach ($_SESSION['cart_item'] as $item) {    // fetch all details from database in loop
                    $item_price = $item['quantity'] * $item['price'];
                    ?>
                    <tr>
                        <td class="text-left">
                            <img src="http://localhost/website<?= $item['image'] ?>" alt="<?= $item['name'] ?>" class="img-fluid" width="100">
                            <?= $item['name'] ?>
                        </td>
                        <td class="text-left"><?= $item['code'] ?></td>
                        <td class="text-right"><?= $item['quantity'] ?></td>
                        <td class="text-right">₹<?= number_format($item['price'], 2) ?></td>
                        <td class="text-right">₹<?= number_format($item_price, 2) ?></td>
                        <td class="text-center">
                            <a href="cart.php?action=remove&code=<?= $item['code']; ?>" class="btn btn-danger">X</a>
                        </td>
                    </tr>

                    <?php
                    $total_quantity += $item["quantity"];
                    $total_price += ($item["price"]*$item["quantity"]);
                }
            }

            if (isset($_SESSION['cart_item']) && !empty($_SESSION['cart_item'])){
                ?>
                <tr>
                    <td colspan="2" align="right">Total:</td>
                    <td align="right"><strong><?= $total_quantity ?></strong></td>
                    <td></td>
                    <td align="right"><strong>₹<?= number_format($total_price, 2); ?></strong></td>
                    <td></td>
                </tr>

            <?php }

                ?>
            </tbody>
        </table>
    </div>
    <div class="d-flex justify-content-between mt-3">
            <a href="index.php" class="btn btn-primary">Continue Shopping</a>  <!-- link to home page  -->
            <a href="checkout.php" class="btn btn-success">Proceed to Checkout</a> <!-- link to checkout page  -->
        </div>

    


</body>
</html>

