<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['username']) || $_SESSION['userType'] !== 'admin') {
    header("Location: admin.php");
    exit;
}

// Welcome message
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>
<body>
    <h2>Welcome, <?php echo $username; ?>!</h2>
    <p>This is your admin dashboard.</p>
    <a href="logout.php">Logout</a>
</body>
</html>
