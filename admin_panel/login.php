<?php
require("./connection/conn.php");
$username = $_POST['username'];
$password = $_POST['password'];
echo $username;
echo $password;
if ($username != "" && $password != "") {
    // $sql_query = "select * from admin where username='" . $username . "' and password='" . $password . "'";
    $sql_query = "select * from admin where username='".$username."' and password='".$password."'";
    $result = mysqli_query($con, $sql_query);
    $auth = mysqli_num_rows($result);
    echo $auth;
    
    if($auth > 0){
        echo "Arrived here";
        $row = mysqli_fetch_array($result);
        $_SESSION['adminName'] = $row['name'];
        $_SESSION['adminLogin'] = true;
        header('Location: admin_home_page.php');
    } else {
        $msg = 'Invalid username or password';
        header('Location: index.php?msg='.$msg);
    }
}
