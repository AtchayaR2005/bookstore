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
<body style="background-image:url('assets/images/books.jpg')">
<div class="overlay">
<nav>
<a href="home.php">Home</a>
<a href="cart.php">Cart</a>
<a href="history.php">History</a>
<a href="logout.php">Logout</a>
</nav>

<div class="box">
<h2>Available Books</h2>
<table>
<tr><th>Title</th><th>Author</th><th>Price</th><th>Action</th></tr>
<?php
$res=$conn->query("SELECT * FROM books");
while($r=$res->fetch_assoc()){
echo "<tr>
<td>{$r['title']}</td>
<td>{$r['author']}</td>
<td>₹{$r['price']}</td>
<td><a href='cart.php?id={$r['id']}'><button>Add to Cart</button></a></td>
</tr>";
}
?>
</table>
</div>
</div>
</body>
</html>
