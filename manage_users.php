<?php
session_start();
include "db.php";

if (!isset($_SESSION["role"]) || $_SESSION["role"] !== "superuser") {
    echo "Access Denied!";
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uname = $_POST["username"];
    $newRole = $_POST["role"]; // 'user' or 'superuser'

    $sql = "UPDATE users SET role='$newRole' WHERE name='$uname'";
    if ($conn->query($sql) === TRUE) {
        echo "User role updated successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}

$result = $conn->query("SELECT * FROM users");

echo "<h1>Manage Users</h1>";
echo "<form method='post'>";
echo "<select name='username'>";
while ($row = $result->fetch_assoc()) {
    echo "<option value='" . $row['name'] . "'>" . $row['name'] . " (" . $row['role'] . ")</option>";
}
echo "</select>";

echo "<select name='role'>
        <option value='user'>User</option>
        <option value='superuser'>Superuser</option>
      </select>";

echo "<button type='submit'>Change Role</button>";
echo "</form>";

?>
<a href="dashboard.php">Back</a>
