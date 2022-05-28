<?php
require("./connection/conn.php");
if (isset($_SESSION['adminLogin']) != true) {
    echo "<script> document.location = 'index.php';</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title>VFA @Admin Panel</title>
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <?php
        include('navigation.php');
        ?>
        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <span class="material-icons-sharp">
                        menu
                    </span>
                </div>
                <!--user img-->
                <!-- <h4 class="adminName">kanjariya rahul</h4> -->
                <div class="user">
                    <img src="./image/customer01.jpg">
                </div>
                <div>
                    <span class=""><?=$_SESSION['adminName'] ?></span>
                </div>
            </div>

            <!-- ======================= Cards ================== -->
            <h1 class="Dashboard">Dashboard</h1>
            <div class="cardBox">
                <div class="card">
                    <h1 class="cardname">Active view</h1>
                    <div>
                        <div class="cardtop">Right now</div>
                        <div class="numbers">1</div>
                        <div class="cardbootm">active visitors on site</div>
                    </div>
                </div>

                <div class="card">
                    <h1 class="cardname">Active view</h1>
                    <div>
                        <div class="cardtop">Right now</div>
                        <div class="numbers">2</div>
                        <div class="cardbootm">active visitors on site</div>
                    </div>
                </div>

                <div class="card">
                    <h1 class="cardname">Active view</h1>
                    <div>
                        <div class="cardtop">Right now</div>
                        <div class="numbers">3</div>
                        <div class="cardbootm">active visitors on site</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>
</body>

</html>