<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the required fields are set
    if (isset($_POST['productname']) && isset($_POST['productprice'])) {
        // Collect the juice details
        $product_name = $_POST['prodcutname'];
        $price= $_POST['prodcutprice'];

        // Check if there are existing orders in the session
        session_start();
        if (!isset($_SESSION['cart'])) {
            // If no existing orders, initialize an empty array
            $_SESSION['cart'] = array();
        }

        // Append the new order to the existing orders
        $_SESSION['cart'][] = array('name' => $juiceName, 'price' => $juicePrice);

        // Display the updated orders
        echo "<h2>Updated Orders:</h2>";
        foreach ($_SESSION['cart'] as $order) {
            echo "<p>{$order['name']} - GHS {$order['price']}</p>";
        }

        // Add a button to go back to the previous page
        echo '<button onclick="goBack()">Go Back</button>';

        // JavaScript function to go back
        echo '<script>
                function goBack() {
                    window.history.back();
                }
              </script>';
    } else {
        // Handle the case where required fields are not set
        echo "Error: Required fields are not set.";
    }
} else {
    // Handle the case where the form is not submitted
    echo "Error: Form not submitted.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="assets/css/cart.css">
</head>
<body>
    <header>
        <h1>Shopping Cart</h1>
    </header>
    <main>
        <section class="cart">
            <h2>Your Cart</h2>
            <div class="cart-items">
                <!-- Cart items will be dynamically added here -->
                <div class="cart-item">
                    <img src="product-image.jpg" alt="Product Image">
                    <div class="item-details">
                        <h3>Product Name</h3>
                        <p>Price: $20</p>
                        <p>Quantity: 1</p>
                        <button class="remove-btn">Remove</button>
                    </div>
                </div>
            </div>
            <div class="cart-summary">
                <h3>Cart Summary</h3>
                <p>Total Items: 1</p>
                <p>Total Price: $20</p>
                <button class="checkout-btn">Checkout</button>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Shopping Cart. All rights reserved.</p>
    </footer>
</body>
</html>
