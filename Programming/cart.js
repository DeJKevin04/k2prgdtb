// cart.js
const db = require('./db'); // Import the database connection

// Function to handle adding an item to the cart
function addToCart(product_id, quantity, callback) {
  const query = 'INSERT INTO cart (product_id, quantity, price) VALUES (?,?,?)';

  // Execute the query
  db.query(query, [product_id, quantity], (err, results) => {
    if (err) {
      return callback(err);
    }
    callback(null, results);
  });
}

// Export the addToCart function
module.exports = addToCart;
