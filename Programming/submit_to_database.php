<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','mysql');

// get the post records
$name = $_POST['name'];
$email = $_POST['email'];
$report_type = $_POST['reportType'];
$comments = $_POST['comments'];

// database insert SQL code
$sql = "INSERT INTO `feedback` (`id`, `name`, `email`, `report_type`, `comments`) VALUES ('0', '$name', '$email', '$reportType', '$comments')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
    echo "";
}
?>