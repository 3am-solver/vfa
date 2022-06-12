<?php

$conn = mysqli_connect("localhost", "root", "", "vfa");
header('Content-Type: application/json');

$name = $_GET["name"];
$mobile = $_GET["mobile"];
$msg = $_GET["msg"];
// echo "Name = " . $name . "<br>";
// echo "Mobile = " . $mobile . "<br>";
// echo "Message = " . $msg . "<br>";

if ($msg == "" || $mobile == "" || $msg == "") {
    $response = array("status" => false, "data" => "Please Fill out Blank Details");
    echo json_encode($response);
} else {
    try {
        $sql = "INSERT INTO `contact` (`name`, `mobile`, `msg`) VALUES ('$name', '$mobile', '$msg');";
        if (mysqli_query($conn, $sql)) {
            $response = array("status" => true, "data" => "🕘 Good news! your concern will be addressed on priority🤩 Thank you for reaching out. 👍 Keep enjoying smart farming with VFA. 🌱 Grow efficient, Grow more!🌱 Thank you for contacting VFA! 👍

            👉 You can also reach out to us by calling on 📱 +91 6353485414 between 09:00 A.M - 09:00 P.M. 👍");
            echo json_encode($response);
        } else {
            $response = array("status" => false, "data" => "We are unable to Contact at this moment please try again after some time");
            echo json_encode($response);
        }
    } catch (mysqli_sql_exception $e) {
        $response = array("status" => false, "data" => "You already Contacted us one time Please wait for a moment our team member will cotnact you Soon!, Thank you");
        echo json_encode($response);
    }
}
?>