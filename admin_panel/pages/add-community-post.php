<?php
include "../connection/conn.php";
if(isset($_SESSION['adminLogin']) != true){
    echo "<script> document.location = 'index.php';</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('../header.php'); ?>
</head>


<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <?php
        include('../navigation.php');
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
                    <img src="../image/customer01.jpg">
                </div>
                <div>
                <span class=""><?=$_SESSION['adminName'] ?></span>
                </div>
            </div>
            <h1 class="Dashboard">Add Community Post</h1>
        </div>
    </div>
    <script src="./assets/js/main.js"></script>
</body>

</html>