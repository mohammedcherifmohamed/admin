<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
include "db.php";
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uname = $_POST["uname"];
    $psw = $_POST["psw"];

    $sql = "SELECT * FROM users WHERE name = '$uname'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($psw, $row['password'])) {
            $_SESSION["uname"] = $uname;
            $_SESSION["role"] = $row["role"];
            header("Location: dashboard.php");
            exit();
        } else {
            echo "Invalid password!";
        }
    } else {
        echo "User not found!";
    }
}
?>
