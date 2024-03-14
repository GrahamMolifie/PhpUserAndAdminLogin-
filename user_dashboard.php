<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['username']) || $_SESSION['userType'] !== 'user') {
    header("Location: index.php");
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
    <title>User Dashboard</title>
</head>
<body>
    <h2>Welcome, <?php echo $username; ?>!</h2>
    <p>This is your user dashboard.</p>
    <a href="logout.php">Logout</a>
</body>
</html>
