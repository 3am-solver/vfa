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
    <style>
        .card {
            padding: 0.7rem;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            flex-wrap: wrap;
        }

        .cardBox .card:hover {
            background-color: white;
        }

        .cardBox .card:hover .numbers,
        .cardBox .card:hover .cardName {
            color: var(--green);
        }

        .add-btn {
            width: 90%;
            padding: 0.5rem;
            border: 1px solid;
            margin-top: 1rem;
            margin-bottom: -3rem;
        }
    </style>
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
            <h1 class="Dashboard">Manage Data</h1>
            <div class="cardBox">
                <div class="card">
                    <h1 class="cardname">Add New Crop</h1>
                    <span class="material-icons-sharp numbers">
                        agriculture
                    </span>
                    <a href="add-new-crop.php" class="add-btn">Add Now</a>
                </div>
                <div class="card">
                    <h1 class="cardname">Add Crop Data</h1>
                    <span class="material-icons-sharp numbers">
                        compost
                    </span>
                    <a href="add-crop-data.php" class="add-btn">Add Now</a>
                </div>

                <div class="card">
                    <h1 class="cardname">Add Crop FAQ</h1>
                    <span class="material-icons-sharp numbers">
                        psychology_alt
                    </span>
                    <a href="add-crop-faq.php" class="add-btn">Add Now</a>
                </div>

                <div class="card">
                    <h1 class="cardname">Community Post</h1>
                    <span class="material-icons-sharp numbers">
                        hub
                    </span>
                    <a href="add-community-post.php" class="add-btn">Add Now</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>