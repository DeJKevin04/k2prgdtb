<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Bloombox</title>
<link rel="stylesheet" href="styles.css">
  </head>
  <body>
  <?php
    
    echo "";

    ?>
  <div class="search-bar">
    <input type="text" placeholder="Find your plant">
    <button type="button" class="delete-btn" onclick="clearSearchInput()">
      <!-- Replace 'delete-icon.png' with the actual path to your delete icon image -->
      <img src="https://th.bing.com/th/id/R.1535b6a55f4c069d2390c6396e2bec7e?rik=kQeayOpRuhVe5g&riu=http%3a%2f%2fcdn.onlinewebfonts.com%2fsvg%2fimg_110190.png&ehk=2fd0gdYpg%2bg1paY3qKkiJlRjWiMMsJK5%2fBbHOumKK9I%3d&risl=&pid=ImgRaw&r=0" alt="Delete">
    </button>
    <button type="submit" class="search-btn">
      <img src="https://www.freeiconspng.com/uploads/search-icon-png-5.png" alt="Search">
    </button>
    <!-- Add this HTML for the show-all button inside your search-bar div -->
<button type="button" class="show-all-icon" onclick="showAllItems()">
  <!-- Replace 'show-all-icon.png' with the actual path to your show-all icon image -->
  <img src="https://static.thenounproject.com/png/671961-200.png" alt="Show All">
</button>
  </div> 
<!--Here are the randomly generated barcode numbers for 6 plant items:

- Plant item 1 barcode: **672670307048**
- Plant item 2 barcode: **912092210417**
- Plant item 3 barcode: **190566226834**
- Plant item 4 barcode: **584845208147**
- Plant item 5 barcode: **473950778831**
- Plant item 6 barcode: **818140328087**

These barcodes are 12-digit numbers generated randomly and can be used for your plant items. If you need anything else, feel free to ask!-->
<!-- Example of an item card with inline quantity input and dynamic price update -->
<div class="card">
  <img id="plant1" src="https://cdn.shopify.com/s/files/1/1752/4567/products/snake_laurentii_10_crescent_white_da86d6a9-e1e7-41df-9974-92c30efeb883.png?v=1536162303" alt="Item">
  <div class="container">
    <h4><b>Snake Plant Seeds</b></h4>
    <div class="price-quantity">
      <p class="price">$<span class="item-price"></span></p>
      <input type="number" value="1" min="1" class="item-quantity" data-price="20.00" oninput="updatePrice(this)" placeholder="1">
    </div>
    <div><p class="product-id">Product ID: 672670307048</p></div>
    <button onclick="addToCart('item1')" id="myBtn">Add to Cart</button>
  </div>
</div>

<div class="card">
  <img id="plant2" src="https://www.action.com/globalassets/cmsarticleimages/12/31/3004210_8720088252130-111.png/" alt="Item">
  <div class="container">
    <h4><b>Orchid Seeds</b></h4>
    <div class="price-quantity">
      <p class="price">$<span class="item-price"></span></p>
      <input type="number" value="1" min="1" class="item-quantity" data-price="10.00" oninput="updatePrice(this)" placeholder="1">
    </div>
    <button type="button" class="add-to-cart-button" data-product-id="12345">Add to Cart</button>
  </div>
</div>

<div class="card">
  <img id="plant3" src="https://purepng.com/public/uploads/medium/purepng.com-cactusplantcactuscacticactaceae-1411526817834wubdp.png" alt="Item">
  <div class="container">
    <h4><b>Cactus Seeds</b></h4>
    <div class="price-quantity">
      <p class="price">$<span class="item-price"></span></p>
      <input type="number" value="1" min="1" class="item-quantity" data-price="15.00" oninput="updatePrice(this)" placeholder="1">
    </div>
    <!-- Updated button with copy functionality -->
    <button onclick="addToCart('item3')" id="myBtn">Add to Cart</button>
  </div>
</div>

<div class="card">
  <img id="plant2" src="https://png.pngtree.com/png-vector/20240127/ourmid/pngtree-lucky-bamboo---gift-plant-png-image_11555807.png" alt="Item">
  <div class="container">
    <h4><b>Bamboo Seeds</b></h4>
    <div class="price-quantity">
      <p class="price">$<span class="item-price"></span></p>
      <input type="number" value="1" min="1" class="item-quantity" data-price="25.00" oninput="updatePrice(this)" placeholder="1">
    </div>
    <!-- Updated button with copy functionality -->
    <button onclick="addToCart('item4')" id="myBtn">Add to Cart</button>
  </div>
</div>

<div class="bottom-nav">
  <a href="index.html" class="active"><div class="icon" style="background-image: url('https://clipground.com/images/white-home-icon-transparent-png-6.png');"></div>Home</a>
  <a href="cart.html"><div class="icon" style="background-image: url('https://pic.onlinewebfonts.com/svg/img_572196.svg');"></div>Cart</a>
<!--
  <a href="support.html"><div class="icon" style="background-image: url('https://th.bing.com/th/id/R.8a969451593fd96775c366060f58d7b2?rik=Zcv1uVeIlkiJsA&riu=http%3a%2f%2fwww.pngmart.com%2ffiles%2f7%2fSupport-PNG-Picture.png&ehk=7FCgp8QIL8%2fihpR4t7ZZKsaZ2SVvm8ncKNjYRTGzWx0%3d&risl=&pid=ImgRaw&r=0');"></div>Support</a>
    -->
</div>

<!-- Trigger/Open The Modal -->
<!-- The Modal -->
<div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Item has been added to your cart!</p>
    <!-- Add an Okay button -->
    <button id="modal-okay-btn">Okay</button>
  </div>
</div>

<script src="script.js"></script>
  

</body>
</html>