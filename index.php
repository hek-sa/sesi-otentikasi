<?php
session_start();

if (isset($_SESSION['username'])) {
    header("Location: pages/dashboard.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Welcome to Simple Web</h1>
    <p><a href="pages/login.php">Login</a> to access the dashboard.</p>
</body>
</html>
