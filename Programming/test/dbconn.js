const express = require('express');
const bodyParser = require('body-parser');
const mysql = require('mysql');
const app = express();
const port = 3000;

// Database connection settings
const dbConfig = {
  host: 'localhost',
  user: 'root',
  password: '',
  database: 'mysql'
};

// Create connection
const con = mysql.createConnection(dbConfig);

// Connect to the database
con.connect(err => {
  if (err) {
    console.error('Connection failed:', err);
    process.exit(1); // Exit the process with an error code
  }
  console.log('Connected successfully to the database.');

  // SQL to create table
  const sql = `
    CREATE TABLE IF NOT EXISTS cart (
      id INT AUTO_INCREMENT PRIMARY KEY,
      product_id INT NOT NULL,
      price INT NOT NULL,
      quantity INT NOT NULL,
      review varchar(255)
    );
  `;

  // Execute query to create table
  con.query(sql, (err, result) => {
    if (err) {
      console.error('Error creating table:', err);
    } else {
      console.log("Table 'cart' created successfully");
    }
  });
});

app.use(bodyParser.json());

app.post('/save-cart', (req, res) => {
  const cartData = req.body;
  // Use dbConfig to interact with the database
  // Here you would write the logic to insert or update the cart data in the database
  // ...

  res.send('Cart data received');
});

app.listen(port, () => {
  console.log(`Server running on port ${port}`);
});

// Export the database connection
module.exports = db;

