<?php
include "config.php";
if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit();
}
?>

<?php include "config.php";
if(isset($_GET['id'])){
$conn->query("INSERT INTO cart(book_id) VALUES({$_GET['id']})");
}
?>
<html>
<head><link rel="stylesheet" href="assets/css/style.css"></head>
<body style="background-image:url('assets/images/cart.jpg')">
<div class="overlay">
<nav>
<a href="books.php">Books</a>
<a href="history.php">History</a>
<a href="logout.php">Logout</a>
</nav>

<div class="box">
<h2>Your Cart</h2>
<?php
$total=0;
$res=$conn->query("SELECT b.title,b.price FROM cart c JOIN books b ON c.book_id=b.id");
while($r=$res->fetch_assoc()){
$total+=$r['price'];
echo "{$r['title']} - ₹{$r['price']}<br>";
}
echo "<h3>Total: ₹$total</h3>";
?>
</div>
</div>
</body>
</html>
