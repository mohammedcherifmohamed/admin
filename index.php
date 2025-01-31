<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Login Form</title> 
    <link rel="stylesheet" href="login.css">
    </head> 
<body> 
    <div class="login-container">
        <form action="login.php" method="post"> 
            <h2>Login</h2>
            <label for="uname"><b>Username</b></label> 
            <input type="text" placeholder="Enter Username" name="uname" required> 
    
            <label for="psw"><b>Password</b></label> 
            <input type="password" placeholder="Enter Password" name="psw" required> 
         
            <button type="submit">Login</button> 
            <label> 
                <input type="checkbox" checked="checked" name="remember"> Remember me 
            </label> 
            <p>Don't have an account? <a href="register1.php">Register here</a></p>

        </form> 
    </div>
</body> 
</html>
