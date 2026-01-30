<?php
include "config.php";
if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit();
}
?>

<html>
<head><link rel="stylesheet" href="assets/css/style.css"></head>
<body style="background-image:url('assets/images/history.jpg')">
<div class="overlay">
<nav>
<a href="home.php">Home</a>
<a href="logout.php">Logout</a>
</nav>

<div class="box">
<h2>Purchase History</h2>
<p>Thank you for using this bookstore.<br>Come again 😊</p>
</div>
</div>
</body>
</html>
