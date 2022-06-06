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
    <div class="navigation">
    <ul>
        <li>
            <a href="#">
                <span class="title1">VIRTUAL FARMING ASSISTANT</span>
            </a>
        </li>

        <li class="hovered">
            <a href="admin_home_page.php">
                <span class="material-icons-sharp icon">
                    dashboard
                </span>
                <span class="title">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="#">
                <span class="material-icons-sharp icon">
                    agriculture
                </span>
                <span class="title">Manage farmers</span>
            </a>
        </li>
        <li>
            <a href="./pages/recent-update.php">
                <span class="material-icons-sharp icon">
                    tips_and_updates
                </span>
                <span class="title">Send Updates</span>
            </a>
        </li>
        <li>
            <a href="./pages/publish-blogs.php">
                <span class="material-icons-sharp icon">
                    rss_feed
                </span>
                <span class="title">Publishe Blog</span>
            </a>
        </li>
        <li>
            <a href="./pages/manage-data.php">
                <span class="material-icons-sharp icon">
                    storage
                </span>
                <span class="link_name">Manage Data</span>
            </a>
        </li>
        <li>
            <a href="index.php?logout=true">
                <span class="material-icons-sharp icon">
                    logout
                </span>
                <span class="title">Logout</span>
            </a>
        </li>
    </ul>
</div>
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