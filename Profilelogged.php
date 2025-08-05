<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
?>
<!DOCTYPE html>
<html>
<head>
 <title>Profile</title>
 <link rel="stylesheet" type="text/css" href="css/loginNregister.css">
</head>
<body>
    <div class="profile-container">
        <h1 class="profile-greeting">Hello, <?php echo htmlspecialchars($_SESSION['name']); ?></h1>
        <nav class="ProfileLogged-nav">
            <a href="indexLogged.php">Main Page</a>
            <a href="change-password.php">Change Password</a>
            <a href="Logout.php">Logout</a>
        </nav>
    </div>
</body>
</html>
<?php
}else{
    header("Location: Logout.php");
    exit();
}
?>