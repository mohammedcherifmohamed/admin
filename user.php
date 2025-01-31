<?php
session_start();
if (!isset($_SESSION["role"]) || $_SESSION["role"] !== "user") {
    echo "Access Denied!";
    exit();
}
?>
<h1>Welcome, Regular User!</h1>
<a href="logout.php">Logout</a>
