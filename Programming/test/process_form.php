<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('sql113.ezyro.com', 'ezyro_36160966', '30f6aa700', 'ezyro_36160966_kevindb');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind
$sql = "INSERT INTO `cart` (`Id`, `fldName`, `fldEmail`, 'fldPurchase', `fldAddress`, `fldMessage`) VALUES ('0', '$txtName', '$txtEmail', '$txtPurchase', '$txtAddress', '$txtMessage')";


// get the post records
$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
$txtPurchase = $_POST['txtPurchase'];
$txtAddress = $_POST['txtAddress'];
$txtMessage = $_POST['txtMessage'];


// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
    echo "";
}
?>