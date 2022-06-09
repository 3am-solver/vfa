<?php
    header("Content-Type: application/json");

    require("../connection/conn.php");
    $farmer_name = $_POST['f-name'];
    $farmer_mobileno = $_POST['f-mobileno'];
    $farmer_email = $_POST['f-email'];
    $farmer_username = $_POST['f-username'];
    $farmer_password = hash("md5", $_POST['f-password']);

    // validating Email and Mobile No
    $validate = mysqli_query($con, "SELECT name FROM `farmer` WHERE mobile = '$farmer_mobileno' and email = '$farmer_email';");

    $validate_Rows = mysqli_num_rows($validate);
    if($validate_Rows == 0){
        
        // Registring a new Farmer
        $sql = "INSERT INTO farmer(name, mobile, username, password, email) VALUES('$farmer_name', $farmer_mobileno, '$farmer_username', '$farmer_password', '$farmer_email')";

        $result = mysqli_query($con, $sql);
        if ($result) {

            // Sending Farmer Information from Database 
            $sql = "SELECT * FROM `farmer` WHERE username = '$farmer_username' AND password = '$farmer_password';";
            if($result = mysqli_query($con, $sql)){
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
        }
        else{
            $response = array("status" => false, "data" => "Sorry! Registration Failed");
            echo json_encode($response);
        }
    }
    else{
        $response = array("status" => false, "data" => "Email or Mobile No already Registered...");
            echo json_encode($response);
    }
?>