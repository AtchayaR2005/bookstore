<?php
include "config.php";
if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit();
}
?>

<?php include "config.php"; ?>
<html>
<head><link rel="stylesheet" href="assets/css/style.css"></head>
<body style="background-image:url('assets/images/home.jpg')">
<div class="overlay">
<nav>
<a href="home.php">Home</a>
<a href="books.php">Books</a>
<a href="cart.php">Cart</a>
<a href="history.php">History</a>
<a href="logout.php">Logout</a>
</nav>

<div class="box">
<h1>Welcome to the Bookstore</h1>
<p>A room without books is like a body without a soul.</p>
</div>
</div>
</body>
</html>
