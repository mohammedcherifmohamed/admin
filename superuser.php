<?php
session_start();
if (!isset($_SESSION["role"]) || $_SESSION["role"] !== "superuser") {
    echo "Access Denied!";
    exit();
}
?>
<h1>Welcome, Superuser!</h1>
<a href="manage_users.php">Manage Users</a>
<a href="logout.php">Logout</a>
