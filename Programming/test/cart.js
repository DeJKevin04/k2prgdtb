// Require the database connection module
const db = require('./dbconn');

// Now you can use 'db' to execute queries in cart.js

// Initialize cart
let cart = JSON.parse(localStorage.getItem('cart')) || [];

// Function to add an item to the cart
function addToCart(item) {
  // Check if the item already exists in the cart
  const existingItem = cart.find(cartItem => cartItem.name === item.name);
  if (existingItem) {
    existingItem.quantity++; // Increase quantity
  } else {
    item.quantity = 1; // Set initial quantity
    cart.push(item); // Add new item to cart
  }
  saveCart(); // Save cart to Local Storage
  displayCart(); // Update cart display
  sendCartData(); // Send cart data to server
}

// Function to remove an item from the cart
function removeFromCart(itemName) {
  cart = cart.filter(item => item.name !== itemName);
  saveCart(); // Save cart to Local Storage
  displayCart(); // Update cart display
  sendCartData(); // Send updated cart data to server
}

// Function to save the cart to Local Storage
function saveCart() {
  localStorage.setItem('cart', JSON.stringify(cart));
}

// Function to display the cart items
function displayCart() {
  const cartContainer = document.getElementById('cart-container');
  cartContainer.innerHTML = ''; // Clear the cart container
  cart.forEach(item => {
    cartContainer.innerHTML += `
      <div class="cart-item">
        <span>${item.name}</span> - 
        <span>$${item.price}</span> x 
        <span>${item.quantity}</span>
        <button onclick="removeFromCart('${item.name}')">Remove</button>
      </div>
    `;
  });
}

// Function to send the cart data to the server
function sendCartData() {
  const xhr = new XMLHttpRequest();
  xhr.open('POST', '/save-cart', true); // Assuming '/save-cart' is your Node.js server endpoint
  xhr.setRequestHeader('Content-Type', 'application/json');
  xhr.onreadystatechange = function() {
    if (xhr.readyState === 4 && xhr.status === 200) {
      console.log('Cart data sent to the server');
    }
  };
  xhr.send(JSON.stringify(cart));
}

// Example items to display in cart.html
const exampleItems = [
  { name: 'Product 1', price: 19.99 },
  { name: 'Product 2', price: 29.99 },
  { name: 'Product 3', price: 39.99 }
];

// Function to initialize the example items display
function initItemsDisplay() {
  const itemsDisplay = document.getElementById('items-display');
  exampleItems.forEach(item => {
    itemsDisplay.innerHTML += `
      <div class="item">
        <h3>${item.name}</h3>
        <p>Price: $${item.price}</p>
        <button onclick="addToCart(${JSON.stringify(item)})">Add to Cart</button>
      </div>
    `;
  });
}

// Event listeners for document ready
document.addEventListener('DOMContentLoaded', () => {
  displayCart(); // Display cart items on load
  initItemsDisplay(); // Display example items on cart.html
});

// Function to insert a new item into the cart
function insertIntoCart(product_id, price, quantity, review) {
  // SQL query to insert a new row into the cart table
  const query = `
    INSERT INTO cart (id, product_id, price, quantity, review)
    VALUES (?, ?, ?, ?);
  `;

  // Execute the query with the provided values
  // Assuming you're using a MySQL library that supports prepared statements
  db.execute(query, [product_id, price, quantity, review], function(err, result) {
    if (err) throw err;
    console.log('1 record inserted, ID:', result.insertId);
  });
}

// Example usage
// insertIntoCart(101, 1500, 2, 'Great product!');

// cart.js
document.addEventListener('DOMContentLoaded', function() {
  const form = document.getElementById('add-to-cart-form');
  form.onsubmit = function(e) {
    e.preventDefault();
    
    // Extract data from the form
    const formData = new FormData(form);
    const product_id = formData.get('product_id');
    const price = formData.get('price');
    const quantity = formData.get('quantity');
    const review = formData.get('review');
    
    // Call the insertIntoCart function from earlier
    insertIntoCart(product_id, price, quantity, review);
  };
});
