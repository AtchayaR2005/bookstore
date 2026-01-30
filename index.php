<?php
include "config.php";

if (isset($_POST['login'])) {
    $u = $_POST['username'];
    $p = $_POST['password'];

    if ($u === "admin" && $p === "admin") {
        $_SESSION['user'] = $u;
        header("Location: home.php");
        exit();
    } else {
        $error = "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body style="background-image:url('assets/images/login.jpg')">

<div class="overlay">
<div class="box" style="width:400px;text-align:center;">
<h2>📚 Bookstore Login</h2>

<form method="post">
<input type="text" name="username" placeholder="Username" required><br><br>
<input type="password" name="password" placeholder="Password" required><br><br>
<button name="login">Login</button>
</form>

<p style="color:red;"><?php echo $error ?? ""; ?></p>
</div>
</div>

</body>
</html>
