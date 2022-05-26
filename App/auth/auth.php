<?php
    require('../connection/conn.php');
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $form = $_GET['f'];
        $farmer_username = $_POST['f-username'];
        $farmer_password = hash("md5",$_POST['f-password']);
        if($form == 'signup'){
            $farmer_name = $_POST['f-name'];
            $farmer_mobileno = $_POST['f-mobileno'];
            $farmer_email = $_POST['f-email'];
            // Registring a new Farmer
            $sql = "INSERT INTO farmer(name, mobile, username, password, email) VALUES('$farmer_name', $farmer_mobileno, '$farmer_username', '$farmer_password', '$farmer_email')";

            $conn->exec($sql);

            $farmer_id = $conn->lastInsertId();

            echo 'The farmer id <b>' . $farmer_id . '</b> was inserted';
        }
        if($form == 'login'){
            // Logging into Farmer's Account 
            $sql = "SELECT * FROM farmer where username='$farmer_username' AND password='$farmer_password'";
            $stmt = $conn->prepare($sql);
            $stmt->execute();

            // set the resulting array to associative
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            if($stmt->rowCount() > 0)
            {
                session_start();
                $_SESSION['userlogin'] = true;
                echo "<script> document.location = '../home';</script>";
            } else{
                echo "<script> document.location = 'index.html';</script>";
            }
        }
    }
?>