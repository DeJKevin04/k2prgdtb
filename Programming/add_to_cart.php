<?php
// add_to_cart.php
session_start();

// Check if the cart exists in the session, if not, create it
if (!isset($_SESSION['cart'])) {
  $_SESSION['cart'] = array();
}

// Add the item from the form to the cart
if (isset($_POST['item_name']) && isset($_POST['item_price']) && isset($_POST['quantity'])) {
  $item = array(
    'name' => $_POST['item_name'],
    'price' => $_POST['item_price'],
    'quantity' => $_POST['quantity']
  );

  // Add the item to the cart
  $_SESSION['cart'][] = $item;
}
ini_set('display_errors', 1);
error_reporting(E_ALL);
// Redirect to cart.html to display the cart items
header('Location: cart.php');
exit();
?>