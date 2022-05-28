<?php
require("../connection/conn.php");
$username = $_POST['username'];
$password = $_POST['password'];

if ($username != "" && $password != "") {
    $sql_query = "select count(*) as cntUser from admin where username='" . $username . "' and password='" . $password . "'";
    $result = mysqli_query($con, $sql_query);
    $row = mysqli_fetch_array($result);

    $count = $row['cntUser'];

    if ($count > 0) {
        $_SESSION['adminName'] = $row['name'];
        $_SESSION['adminLogin'] = true;
        header('Location: admin_home_page.php');
    } else {
        echo '<div class="container d-flex align-items-center justify-content-center"><div class="w-50 alert-dismissible my-4 alert alert-danger d-flex align-items-center" role="alert">
        <div>Invalid username and password</div></div>';
    }
}
?>
