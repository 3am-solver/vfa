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
            <h1 class="Dashboard">Add Crop Data</h1>
        </div>
    </div>
    <script src="./assets/js/main.js"></script>
</body>

</html>