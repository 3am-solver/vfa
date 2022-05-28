<?php
include "config.php";
if(isset($_SESSION['uname']) != true){
    echo "<script> document.location = 'index.php';</script>";
}
if (isset($_POST['but_submit'])) {

    $uname = mysqli_real_escape_string($con, $_POST['txt_uname']);
    $password = mysqli_real_escape_string($con, $_POST['txt_pwd']);

    if ($uname != "" && $password != "") { 

        $sql_query = "select count(*) as cntUser from admin where username='" . $uname . "' and password='" . $password . "'";
        $result = mysqli_query($con, $sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if ($count > 0) {
            $_SESSION['uname'] = $uname; 
            header('Location: admin_hom_page.php');
        } else {
            echo '<div class="container d-flex align-items-center justify-content-center"><div class="w-50 alert-dismissible my-4 alert alert-danger d-flex align-items-center" role="alert">
            <div>Invalid username and password</div></div>';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include('header.php'); ?>
<link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="loginBox">
        <img src="user.jpg" class="user">
        <h2> Admin Login </h2>
        <form method="post" action="">
            <p>Username</p>
            <input type="text" id="txt_uname" name="txt_uname" required="" placeholder="Username">
            <p>Password</p>
            <input type="password" id="txt_uname" name="txt_pwd" required="" placeholder="*******">
            <input type="submit" name="but_submit" id="but_submit" value="Login">

        </form>
    </div>
</body>

</html>