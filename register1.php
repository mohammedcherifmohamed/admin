
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
<div class="login-container">

    <form action="register.php" method="POST">
        <input type="text" name="username" placeholder="Username" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <label for="role"><b>Role</b></label> 
        <input type="text" placeholder="Enter Role" name="role" required> 
        <button type="submit" name="register">Register</button>
        <p>Already have an account? <a href="index.php">Login here</a></p>
    </form>
</div>

</body>
</html>

