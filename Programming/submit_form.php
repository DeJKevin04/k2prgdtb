<?php
$servername = "localhost";
$username = "root"; // Your db username
$password = ""; // Your db password
$dbname = "mysql"; // Your db name

// Create connection
$conn = new mysqli('localhost', 'root', '', 'mysql');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO feedback (name, email, report_type, comments) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $name, $email, $report_type, $comments);

// Set parameters and execute
$name = $_POST['name'];
$email = $_POST['email'];
$report_type = $_POST['reportType'];
$comments = $_POST['comments'];

$stmt->execute();

echo "New records created successfully";

$stmt->close();
$conn->close();

// ... (Any support related code or messages)

// Automatic redirect to index.php (you can use a delay if needed)
header('Refresh: 5; URL=index.php');
echo 'You will be redirected to the main page in 5 seconds.';

// Or provide a manual link to index.php
echo '<a href="index.php">Return to Main Page</a>';

?>
