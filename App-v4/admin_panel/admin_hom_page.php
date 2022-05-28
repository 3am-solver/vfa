<?php
include "config.php";
if(isset($_SESSION['uname']) != true){
    echo "<script> document.location = 'index.php';</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include('header.php'); ?>
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
                    <i class="fa-solid fa-bars"></i>
                </div> 
                <!--user img-->
                <!-- <h4 class="adminName">kanjariya rahul</h4> -->
                <div class="user">
                    <img src="./assets/imgs/customer01.jpg">
                </div>
                <div>
                <span class=""> Kanjriya rahul</span>
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

            <!-- ================ Add Charts JS ================= -->
            <div class="chartsBx">
                <div class="chart"> <canvas id="chart-1" width="100" hidden="80"></canvas> </div>
                <div class="chart"> <canvas id="chart-2"width="100" hidden="80"></canvas> </div>
            </div>
        </div>
    </div>
    <script src="assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>
    <script src="assets/js/chartsJS.js"></script> 
</body>

</html>