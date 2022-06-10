<?php 
    require("../connection/conn.php");
    header("Content-Type: application/json");

    $crop_id = $_POST['crop-id'];
    $sowing_date = $_POST['sowing-date'];
    $field_area = $_POST['area'];
    $field_type = $_POST['area-type'];
    $soil = $_POST['soil'];
    $water = $_POST['water'];
    
    $row = mysqli_query($con, "SELECT * FROM `crop` WHERE `id` = $crop_id");
    $result = mysqli_fetch_all($row, MYSQLI_ASSOC);
    $response = array("status" => true, "data" => "Farm Added succesfully", "farm" => $result);
    echo json_encode($response);
?>