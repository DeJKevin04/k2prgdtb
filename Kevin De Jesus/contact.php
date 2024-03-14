<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact Form</title>
<link rel="stylesheet" href="css/style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="icon" type="image/icon" href="images/img2.jpg" style="">
</head>
<body class="body">
	<div class = "header">
            <h2>
                OSTRICH
            </h2>
        </div>
        <!-- navigation menu for website layout -->
        <nav class="navbar navbar-expand-lg bg-warning navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar" id='collapsenavbar'>
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar" >
      <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link active" href="webpage1.html">Home</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link active" href="sign-in.html"></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown">More About Ostrich</a>
          <ul class="dropdown-menu">
            <li>
                <a class="dropdown-item" href="fact1.html">Speed & Movement</a>
            </li>
            <li>
                <a class="dropdown-item" href="fact2.html">Herds & Reproduction</a> 
            </li>
            <li>
                <a class="dropdown-item" href="fact3.html"> Behavior & Diet </a>
            </li>
           </ul>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto" id="navbar2">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown">Python</a>
          <ul class="dropdown-menu">
            <li>
                <a class="dropdown-item" href="python2.html">Python Table</a>
            </li>
            <li>
                <a class="dropdown-item" href="python3.html">Python Bar Graph</a>
            </li>
            <li>
                <a class="dropdown-item" href="#"></a>
            </li>
           </ul>
        </li>
        <li class="nav-item active">
            <a class="nav-link active" href="sign-in.html">Contact Us</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link active" href="webpage1.html">  </a></li>
        <li class="nav-item active">
            <a class="nav-link active" href="g11webpage.html"></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link active" href="downloads.html"> Downloads </a>
        </li>
      </ul>
    </div> <!-- navbar-collapse.// -->
    </div> <!-- container-fluid.// -->
</nav><br>


<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('sql301.liveblog365.com', 'lblog_32350282', 'nrw8092kt3l6','lblog_32350282_sqldb');

// get the post records
$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
$txtAddress = $_POST['txtAddress'];
$txtMessage = $_POST['txtMessage'];

// database insert SQL code
$sql = "INSERT INTO `tbl_contact` (`Id`, `fldName`, `fldEmail`, `fldAddress`, `fldMessage`) VALUES ('0', '$txtName', '$txtEmail', '$txtAddress', '$txtMessage')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
    echo "";
}
?>

<div class="form1">
<h2>Contact Form</h2><br>

<p>Thank you for your response.</p>
<div class="container mt3">
<div class="row">
    <div class="col-lg-4">
        <h4><a id="contactprofile1"> Gmail </a></h4>
        <a id="gmail" href="mailto: kevindjk6174@gmail.com;kevindjk6174@gmail.com"><img id="contactprofileimg1" src="images/Gmail-logo.png"></a> 
    </div> 
    <div class="col-lg-4">
        <h4><a id="contactprofile2"> Instagram </a></h4>
        <a href="https://www.instagram.com/within_kevin/"><img id="contactprofileimg2" src="images/logo-instagram-png-13547.png"></a>
    </div>
    <div class="col-lg-4">
        <h4><a id="contactprofile3"> Twitter </a></h4>
        <a href="https://twitter.com/dj_vin2"><img id="contactprofileimg3" src="images/580b57fcd9996e24bc43c53e.png"></a>
    </div>
</div>
</div>
</div>
<div class="mt-5 p-4 bg-warning text-black text-center">
            <p>&copy; Created by Kevin De Jesus</p>
        </div>
</body>
</html> 