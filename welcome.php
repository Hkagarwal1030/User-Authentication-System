<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>Welcome, <?php echo $_SESSION["user"]; ?>!</h2>
    <p>You are logged in to the Department Portal.</p>
    <a href="logout.php" class="btn">Logout</a>
</div>
</body>
</html>
