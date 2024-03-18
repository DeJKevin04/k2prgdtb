// db.js
const mysql = require('mysql');

// Create a connection to the database
const db = mysql.createConnection({
  host: 'localhost', // Replace with your database server
  user: 'root', // Replace with your database username
  password: '', // Replace with your database password
  database: 'mysql' // Replace with your database name
});

// Connect to the database
db.connect(err => {
  if (err) {
    console.error('Error connecting to the database:', err);
    return;
  }
  console.log('Connected to the database.');
});

// Export the connection
module.exports = db;
