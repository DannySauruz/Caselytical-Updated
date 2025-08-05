
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="css/loginNregister.css" />
</head>
<body>
    <div class="login-container">
        <form action="php/auth/login.php" method="post">
            <h2>Login</h2>
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <label>User Name</label>
            <input type="text" name="uname" placeholder="User Name" autocomplete="username">
            <label>Password</label>
            <input type="password" name="password" placeholder="Password" autocomplete="current-password">
            <button type="submit">Login</button>
            <a href="signup.php" class="ca">Create an account</a>
            <a href="AdminLogin.php" class="ca">Admin Login</a>
        </form>
    </div>
</body>
</html>
