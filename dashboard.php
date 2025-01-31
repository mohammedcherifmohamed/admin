<?php
session_start();
if (!isset($_SESSION["role"])) {
    header("Location: login.php");
    exit();
}

echo "<h1>Welcome, " . $_SESSION["uname"] . "</h1>";

if ($_SESSION["role"] == "superuser") {
    echo "<a href='superuser.php'>Superuser Panel</a>";
} else {
    echo "<a href='user.php'>User Dashboard</a>";
}
?>
<br>
<a href="logout.php">Logout</a>
