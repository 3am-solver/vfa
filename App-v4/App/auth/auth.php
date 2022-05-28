<?php
session_start();

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

        $conn->exec($sql);

        $farmer_id = $conn->lastInsertId();

        echo 'The farmer id <b>' . $farmer_id . '</b> was inserted';
    }
    if ($form == 'login') {
        // Logging into Farmer's Account 
        $sql = "SELECT * FROM farmer where username='$farmer_username' AND password='$farmer_password'";
        $result= mysqli_query($con, $sql);
        echo "<script> alert('Number of rows is ".mysqli_num_rows($result)."')</script>";
        // set the resulting array to associative
        if (mysqli_num_rows($result) == 1) {
            while ($data = mysqli_fetch_array($result)) {
                $_SESSION['userlogin'] = true;
                $_SESSION['farmerId'] = $data['id'];
                $_SESSION['farmerName'] = $data['name'];
                $_SESSION['farmerUsername'] = $data['username'];
            }
        } else {
            $_SESSION['userlogin'] = false;
            echo "<script> document.location = './index.php';</script>";
        }
        if($_SESSION['userlogin'] == true){
            echo "login success";
        }
    }
}
