<?php
    require("../connection/conn.php");
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $crop_id = $_POST['crop-id'];
        $sowing_date = $_POST['sowing-date'];
        $field_area = $_POST['area'];
        $field_type = $_POST['area-type'];
        $farmer_id = $_SESSION['farmerId'];
        echo $sowing_date;
        if($crop_id != "" && $sowing_date != "" && $field_area != "" && $field_type != ""){
            $sql = "INSERT INTO `crop-tracking` (`id`, `crop_id`, `farmer_id`, `sowing_date`, `farm_area`, `area_type`, `time`) VALUES (NULL, $crop_id, $farmer_id, '$sowing_date', $field_area, '$field_type', current_timestamp());";
            try {
                $result = mysqli_query($con, $sql);
                if($result){
                    echo"Record inserted Succesfully";
                    header("Location: index.php");
                }
                else{
                    echo"Record was not inserted";
                    header("Location: index.php?cropnotadded=true");
                }
            } catch (Exception $ex) {
                echo "Exception : " . $ex->getMessage();
            }
        }
    }
?>