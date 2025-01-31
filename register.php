<?php
include "db.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uname = $_POST["username"];
    $psw = password_hash($_POST["password"], PASSWORD_DEFAULT); // Hash password
    $role = $_POST["role"]; //  

    $sql = "INSERT INTO users (name, password, role) VALUES ('$uname', '$psw', '$role')";
    
    if ($conn->query($sql) === TRUE) {
        $_SESSION["username"] = $uname;
        $_SESSION["role"] = $role;
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
