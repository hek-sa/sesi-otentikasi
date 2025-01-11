<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h2>Dashboard</h2>
    <p>Welcome, <?= htmlspecialchars($username) ?>!</p>
    <p><a href="logout.php">Logout</a></p>
</body>
</html>
