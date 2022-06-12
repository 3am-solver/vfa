<?php
require("../connection/conn.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VFA @Virtual Farming Assistant APP</title>
    <?php include('../include/base-css.php'); ?>
    <link rel="stylesheet" href="../css/krishi-book.css">
</head>

<body>
    <div class="container">
        <?php include('../include/sidebar.php'); ?>
        <main>
            <h1>Krishi Book</h1>
            <!-- select-crop-section start-->
            <div class="select-crop-section">
                <div class="crop-gallary">
                    <?php
                    $result = mysqli_query($con, "SELECT * FROM crop");
                    while ($data = mysqli_fetch_array($result)) {
                    ?>
                        <div class="crop-item" onClick="reply_click(this.id)" id="<?= $data["id"] ?>">
                            <img src="../img/upload/crop/<?= $data["image"] ?>" alt="crop-image">
                            <h2 id="crop-name"><?= $data["name"] ?></h2>
                        </div>
                    <?php } ?>
                    <form onsubmit="return false;" method="POST">
                        <input type="hidden" name="crop-id" id="crop-id" value="null">
                    </form>
                </div>
            </div>
            <!-- select-crop-section Ends -->

            <!-- Get Crop Data -->
            <section class="select-dieses">
                <div class="disease-gallary">
                    <div class="d-item">
                        <img src="../img/disease//demo1.jpg" alt="Disease Picture Demo">
                        <h4>Name of disease</h4>
                    </div>
                    <div class="d-item">
                        <img src="../img/disease//demo2.jpg" alt="Disease Picture Demo">
                        <h4>Name of disease</h4>
                    </div>
                    <div class="d-item">
                        <img src="../img/disease//demo3.jpg" alt="Disease Picture Demo">
                        <h4>Name of disease</h4>
                    </div>
                    <div class="d-item">
                        <img src="../img/disease//demo4.jpg" alt="Disease Picture Demo">
                        <h4>Name of disease</h4>
                    </div>
                    <div class="d-item">
                        <img src="../img/disease//demo5.jpg" alt="Disease Picture Demo">
                        <h4>Name of disease</h4>
                    </div>
                </div>
            </section>
            <!-- Getting Crop Data Ends Here -->
        </main>
        <?php include('../include/right-section.php'); ?>
    </div>
    <script src="../js/index.js"></script>
    <script>
        // Getting Selected Crop Id
        function reply_click(clicked_id) {
            $("#crop-id").val(clicked_id);
            $(".select-crop-section").css("display", "none");
            $(".select-dieses").css("display", "block");
        }
    </script>
</body>

</html>