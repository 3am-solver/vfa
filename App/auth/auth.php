<?php
require('../connection/conn.php');
if (isset($_GET["signout"])) {
    $check = $_GET["signout"];
    if ($check) {
        session_destroy();
        echo "<script> document.location = '../auth';</script>";
    }
}
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $form = $_GET['f'];
    $farmer_username = $_POST['f-username'];
    $farmer_password = hash("md5", $_POST['f-password']);
    if ($form == 'signup') {
        $farmer_name = $_POST['f-name'];
        $farmer_mobileno = $_POST['f-mobileno'];
        $farmer_email = $_POST['f-email'];
        // Registring a new Farmer
        $sql = "INSERT INTO farmer(name, mobile, username, password, email) VALUES('$farmer_name', $farmer_mobileno, '$farmer_username', '$farmer_password', '$farmer_email')";

        $result = mysqli_query($con, $sql);
        if ($result) {
            echo "SignUp Succesull";
        }
    }
    if ($form == 'login') {
        // Logging into Farmer's Account 
        $sql = "SELECT * FROM farmer where username='$farmer_username' AND password='$farmer_password'";
        $result = mysqli_query($con, $sql);

        $rows = mysqli_num_rows($result);
        // echo "<script> alert('Number of rows is " . $rows . "')</script>";
        // set the resulting array to associative
        if ($rows == 1) { 
            $row = mysqli_fetch_array($result);
            $_SESSION['userlogin'] = true;
            $_SESSION['farmerId'] = $row['id'];
            $_SESSION['farmerName'] = $row['name'];
            $_SESSION['farmerMno'] = $row['mobile'];
            $_SESSION['farmerUsername'] = $row['username']; 
        }
    } else {
        $_SESSION['userlogin'] = false;
    }
    if(isset($_SESSION['userlogin'])){
        if ($_SESSION['userlogin'] == true) {
            echo "login success";
            echo "<script> document.location = '../home';</script>";
        } 
    }
    else {
        echo "Invalid Details! Login Failed";
        echo "<script> document.location = 'index.php';</script>";
    }
}
?>
