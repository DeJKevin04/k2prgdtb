<?php
// cart.php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- ... -->
</head>
<body>

<div id="cart-items">
  <?php
  if (isset($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $item) {
      echo "<div class='cart-item'>";
      echo "<p>Name: " . htmlspecialchars($item['name']) . "</p>";
      echo "<p>Price: $" . htmlspecialchars($item['price']) . "</p>";
      echo "<p>Quantity: " . htmlspecialchars($item['quantity']) . "</p>";
      echo "</div>";
    }
  }
  ini_set('display_errors', 1);
error_reporting(E_ALL);
  ?>
</div>

</body>
</html>