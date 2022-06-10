<?php 
    // require("../connection/conn.php");
    // Connection 
    $conn = mysqli_connect("localhost", "root", "", "vfa");
    header('Content-Type: application/json');
    $username = $_POST['f-username'];
    $password = hash("md5", $_POST['f-password']);

    $sql = "SELECT * FROM `farmer` WHERE username = '$username' AND password = '$password';";

    // Executing Query 
    if($result = mysqli_query($conn, $sql)){
        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
        if(mysqli_num_rows($result) == 1){
            $response = array("status" => true, "data" => $rows);
            echo json_encode($response);
        }
        else{
            $response = array("status" => false, "data" => "Invalid Username or Password");
            echo json_encode($response);
        }
    }
    else{
        $response = array("status" => false, "data" => "Login Query Executing Failed");
        echo json_encode($response);
    }
?>
