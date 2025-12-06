<?php
include 'db.php';
session_start();

$message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($user = $result->fetch_assoc()) {
        if (password_verify($password, $user["password"])) {
            $_SESSION["user"] = $user["name"];
            header("Location: welcome.php");
            
        } else {
            $message = "Incorrect password.";
        }
    } else {
        $message = "User not found.";
    }
    $stmt->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>Login</h2>
    <p class="message"><?php echo $message; ?></p>
    <form method="POST">
        <input type="email" name="email" placeholder="Email Address" required>
        <input type="password" name="password" placeholder="Your Password" required>
        <button type="submit">Login</button>
    </form>
    <p><a href="register.php">Don't have an account? Register</a></p>
</div>
</body>
</html>
