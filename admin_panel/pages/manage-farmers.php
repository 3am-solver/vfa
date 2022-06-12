<?php
include "../connection/conn.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
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
            <h1 class="Dashboard">Manage Farmres</h1>
        </div>
    </div>
    <script src="./assets/js/main.js"></script>
    <!-- Bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>