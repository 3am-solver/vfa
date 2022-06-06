<?php
session_start();
if (isset($_GET['logout']) && $_GET['logout']) {
    session_destroy();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./css/login.css">
</head>

<body>

    <div class="loginBox">
        <img src="./image/user.jpg" class="user">
        <h2> Admin Login </h2>
        <form method="post" action="login.php">
            <p>Username</p>
            <input type="text" id="username" name="username" required placeholder="Username">
            <p>Password</p>
            <input type="password" id="password" name="password" required placeholder="*******">
            <input type="submit">
            <span style="color: red; font-weight: 600;">
            <?php
            if(isset($_GET['msg'])){
                echo $_GET['msg'];
            }
            ?>
            </span>
        </form>
    </div>
</body>

</html>