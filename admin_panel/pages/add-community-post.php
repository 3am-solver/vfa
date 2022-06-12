<?php
include "../connection/conn.php";
if (isset($_SESSION['adminLogin']) != true) {
    echo "<script> document.location = 'index.php';</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('../include/header.php'); ?>
</head>


<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <?php
        include('../navigation.php');
        ?>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <?php
            include('../include/topbar.php');
            ?>
            <h1 class="Dashboard">Add Feed Post</h1>
        </div>
    </div>
    <script src="./assets/js/main.js"></script>
</body>

</html>