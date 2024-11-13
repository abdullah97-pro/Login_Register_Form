<?php
session_start();

if (!isset($_SESSION['user_id']) || $_SESSION['is_admin'] != 0) {
    header("Location:../auth/login.php");
    exit;
}
echo "Welcome to the (Ahmadi Phone Store) employee panel, ".htmlspecialchars($_SESSION['username'])."!";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Panel</title>
</head>
<body>
    <h2>Employee Dashboard</h2>
    <ul>
        <li><a href="">Link1</a></li>
    </ul>

    <a href="../auth/logout.php">Logout</a>
</body>
</html>