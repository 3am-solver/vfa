<?php
require("../connection/conn.php");
if (isset($_SESSION['userlogin']) != true) {
    echo "<script> document.location = '../auth';</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VFA @Virtual Farming Assistant APP</title>
    <?php include('../include/base-css.php'); ?>
    <link rel="stylesheet" href="../css/weather.css">
    <link rel="stylesheet" href="weather-icons-wind.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="weather-icons.css">
</head>

<body>
    <div class="container">
        <?php include('../include/sidebar.php'); ?>
        <main>
            <h1>Weather</h1>
            <div class="weather-card">
                
            </div>
            
        </main>
        <?php include('../include/right-section.php'); ?>
    </div>
    <script src="../js/index.js"></script>
    <script src="moment.min.js"></script>
    <script src="weather-script.js"></script>
    <script src="weather-report.js"></script>
</body>

</html>