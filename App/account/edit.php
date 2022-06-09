<?php 
require("../connection/conn.php");
header('Content-Type: application/json');

$farmer_id = $_POST["farmer-id"];
$farmer_name = $_POST["farmer-name"];
$farmer_username = $_POST["farmer-username"];
$farmer_mobile = $_POST["farmer-mobile"];
$farmer_mail = $_POST["farmer-mail"];
$farmer_state = $_POST["farmer-state"];
$farmer_district = $_POST["farmer-district"];
$farmer_taluka = $_POST["farmer-taluka"];
$farmer_village = $_POST["farmer-village"];
$farmer_pincode = $_POST["farmer-code"];

$sql = "UPDATE `farmer` SET `name` = '$farmer_name', `mobile` = '$farmer_mobile', `email` = '$farmer_mail', `state` = '$farmer_state', `district` = '$farmer_district', `taluka` = '$farmer_taluka', `village` = '$farmer_village', `pincode` = '$farmer_pincode', `username` = '$farmer_username' WHERE `id` = $farmer_id";

if(mysqli_query($con, $sql)){

    // Sending Farmer Information from Database 
    $sql = "SELECT * FROM `farmer` WHERE `id` = $farmer_id;";
    if($result = mysqli_query($con, $sql)){
        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
        if(mysqli_num_rows($result) == 1){
            $response = array("status" => true, "data" => $rows, "msg" => "Profile Updated Succesfully");
            echo json_encode($response);
        }
        else{
            $response = array("status" => false, "msg" => "Profile Updated Succesfully");
            echo json_encode($response);
        }
    }
}
else{
    $response = array("status" => false, "data" => "Profile Updation Failed");
    echo json_encode($response);
}
?>